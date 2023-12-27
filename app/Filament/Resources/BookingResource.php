<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\booking;
// use Filament\Actions\Action;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Booking Guest Details')
                ->icon('heroicon-o-user-circle')
                ->description('All Information About the Main Client')
                ->schema([
                TextInput::make('name')->readOnly(),
                TextInput::make('email')->readOnly(),
                TextInput::make('phone')->readOnly(),
                TextInput::make('country')->readOnly(),
                Textarea::make('message')->readOnly()->columnSpan(2),
                ])->columns(2),
                Section::make('Accommodations')
                ->icon('heroicon-o-calendar-days')
                ->description('All Information About the Accommodations Selected')
                ->schema([
                TextInput::make('accommodation')->readOnly(),
                TextInput::make('pack')
                ->hidden(fn (Get $get): bool => $get('accommodation') != "Hostle Tamraght"),

                TextInput::make('rooms')->readOnly()
                ->hidden(fn (Get $get): bool => $get('pack') != "Stay Only"),
                TextInput::make('dorms')->readOnly()
                ->hidden(fn (Get $get): bool => $get('pack') != "Stay Only"),

                TextInput::make('solocoaching')->readOnly()->label('Solo Surfer (Pupolar Pack)')
                ->hidden(fn (Get $get): bool => !$get('surfcoaching')),
                TextInput::make('buddiescoaching')->readOnly()->label('Buddies Surfer (Premuim Pack)')
                ->hidden(fn (Get $get): bool => !$get('surfcoaching')),

                TextInput::make('soloyoga')->readOnly()->label('Solo Surfer (Premuim Pack)')
                ->hidden(fn (Get $get): bool => !$get('surfyoga')),
                TextInput::make('buddiesyoga')->readOnly()->label('Buddies Surfer (Premuim Pack)')
                ->hidden(fn (Get $get): bool => !$get('surfyoga')),

                TextInput::make('person')->readOnly()->label('Guest(s)')
                ->hidden(fn (Get $get): bool => $get('accommodation') == "Hostle Tamraght"),

                TextInput::make('checkin')->readOnly(),
                TextInput::make('checkout')->readOnly(),
                TextInput::make('total')->readOnly()->prefix('€')->formatStateUsing(function ($state, Booking $record) {
                    return '€'. number_format((float)$record->total, 2, '.', '');
                }),

                ])->columns(2),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Guest')->copyable()->searchable()->sortable()->toggleable()
                ->description(fn (Booking $record): string => $record->email),

                TextColumn::make('phone')->searchable()->copyable()->sortable()->toggleable(),

                 TextColumn::make('country')->searchable()->sortable()->copyable()->toggleable(),

                 TextColumn::make('accommodation')->searchable()->copyable()->sortable()->toggleable()
                 ->badge()
                 ->color(fn (string $state): string => match ($state) {
                    'Hostle Tamraght' => 'sky',
                    'Apartment N4' => 'green',
                    'Apartment N6' => 'teal',
                    'Surf Riad' => 'indigo',
                }),


                TextColumn::make('pack')->searchable()->copyable()->sortable()->toggleable(),

                TextColumn::make('status')->searchable()->copyable()->sortable()->toggleable()
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Pending' => 'gray',
                    'In Progress' => 'info',
                    'Accepted' => 'success',
                    'Rejected' => 'danger',
                }),

                TextColumn::make('checkin')->label('Reservation')->searchable()->copyable()->sortable()->toggleable()
                ->formatStateUsing(function ($state, Booking $record) {
                    return $record->checkin.' => '. $record->checkout;
                }),

                 TextColumn::make('total')->searchable()->copyable()->sortable()->toggleable()
                 ->icon('heroicon-o-banknotes')->summarize(Sum::make()->formatStateUsing(function ($state) {
                    return '€'. number_format((float)$state, 2, '.', '');
                }))
                ->formatStateUsing(function ($state, Booking $record) {
                    return '€'. number_format((float)$record->total, 2, '.', '');
                }),

                 TextColumn::make('created_at')->label('Booking At')->copyable()->searchable()->sortable()->date()->toggleable(),

            ])->defaultSort('created_at', 'desc')
            ->filters([
                Filter::make('created_at')
                ->form([
        DatePicker::make('created_from'),
        DatePicker::make('created_until')->default(now()),
                   ])
            ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when(
                            $data['created_from'],
                             fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                          )
                        ->when(
                            $data['created_until'],
                            fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                        );
            })
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->label('Details')->hidden(fn($record)=>$record->trashed()),
                ActionGroup::make([
                    Tables\Actions\ViewAction::make()->label('Details')->hidden(fn($record)=>$record->trashed()),
                    Action::make('addNote')->label('Edit Note')->hidden(fn($record)=>$record->trashed())
                    ->icon('heroicon-s-paper-clip')
                    ->model(booking::class)
                    ->form([
                     Select::make('status')
                        ->options([
                            'Pending' => 'Pending',
                            'In Progress' => 'In Progress',
                            'Accepted' => 'Accepted',
                            'Rejected' => 'Rejected',

                        ])->native(false)->required(),
                        TextInput::make('note')
                            ->maxLength(255),
                    ])->action(function(booking $booking , array $data){
                        $booking->note = $data['note'];
                        $booking->status = $data['status'];
                        $booking->save();
                    }),
                    Tables\Actions\DeleteAction::make()->hidden(fn($record)=>$record->trashed()),
                ]),
                Tables\Actions\RestoreAction::make()

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}

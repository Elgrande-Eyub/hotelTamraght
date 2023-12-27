<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\booking;

use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
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
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->copyable()->searchable()->sortable()->toggleable()
                ->description(fn (Booking $record): string => $record->email),

                TextColumn::make('phone')->searchable()->copyable()->sortable()->toggleable(),

                 TextColumn::make('country')->searchable()->sortable()->copyable()->toggleable(),

                 TextColumn::make('accommodation')->searchable()->copyable()->sortable()->toggleable()
                 ->badge(),

                TextColumn::make('pack')->default('No Pack selected')->searchable()->copyable()->sortable()->toggleable(),

                TextColumn::make('status')->searchable()->copyable()->sortable()->toggleable()
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Pending' => 'gray',
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

                 TextColumn::make('created_at')->copyable()->searchable()->sortable()->date()->toggleable(),

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
                ActionGroup::make([
                    Tables\Actions\ViewAction::make()->label('Details')->hidden(fn($record)=>$record->trashed()),
                    Tables\Actions\DeleteAction::make()->hidden(fn($record)=>$record->trashed())
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

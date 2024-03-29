<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NotificationResource\Pages;
use App\Filament\Resources\NotificationResource\RelationManagers;
 use App\Models\notification ;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
 use Filament\Notifications\Notification as notify;

class NotificationResource extends Resource
{
    protected static ?string $model = notification::class;
    protected static ?string $navigationGroup = 'Setting';
    protected static ?string $navigationIcon = 'heroicon-o-bell-alert';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')->required()->email()->unique(ignoreRecord:true),
                Select::make('active')
                ->options([
                    1 => 'Active',
                    0 => 'Inactive ',
                ])->native(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('email')->icon('heroicon-o-envelope')->copyable()->searchable()->sortable()->toggleable(),
                IconColumn::make('active')
                    ->boolean(),
                TextColumn::make('created_at')->label('Registered At')->icon('heroicon-o-calendar-days')->date()->copyable()->searchable()->sortable()->toggleable(),
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
                Tables\Actions\Action::make('Inactive/Active')->label('Switch Status')->hidden(fn($record)=>$record->trashed())
                ->icon('heroicon-m-cursor-arrow-rays')
                ->action(function ($record): void {
                    if(notification::count() <= 1 ){
                        notify::make()
                        ->danger()
                        ->title('You Cannot Make Last Record Inactive')
                        ->body('Must be one email at least in the system')
                        ->send();
                        return;
                    }

                    if(notification::where('active',1)->count() == 1 & $record->active == 1){
                        notify::make()
                        ->danger()
                        ->title('You Cannot Make Last Record Inactive')
                        ->body('Must be one email at least in the system')
                        ->send();
                        return;
                    }

                    $record->active = !$record->active;
                    $record->save();
                }),
                Tables\Actions\EditAction::make()->hidden(fn($record)=>$record->trashed()),
                Tables\Actions\RestoreAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\DeleteAction::make()->label('Archive')
                ->action(function($record){
                    if(notification::count() <= 1){
                        notify::make()
                        ->danger()
                        ->title('You Cannot Delete Last Record')
                        ->body('Must be one email at least in the system')
                        ->send();
                        return;
                    }
                     $record->delete();

                     if(notification::count() == 1){
                        $email = notification::first();
                        $email->active = 1;
                        $email->save();
                     }
             })

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
            'index' => Pages\ListNotifications::route('/'),
            'create' => Pages\CreateNotification::route('/create'),
            'edit' => Pages\EditNotification::route('/{record}/edit'),
        ];
    }
}

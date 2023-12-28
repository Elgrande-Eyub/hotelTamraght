<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
// use App\Mail\contactForm;
use App\Mail\outgoingMail;
use App\Models\contact;
use App\Models\inbox;
use Filament\Actions\Action;
// use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action as ActionsAction;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Mail;

class ContactResource extends Resource
{
    protected static ?string $model = contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    public static function getModelLabel(): string
    {
        return __("Consultations");
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              TextInput::make('name')->readOnly(),
              TextInput::make('email')->readOnly(),
              TextInput::make('phone')->readOnly(),
              TextInput::make('topic')->readOnly(),
              TextInput::make('status')->readOnly(),
              TextInput::make('note')->readOnly(),
              Textarea::make('message')->readOnly(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Sender')->copyable()->searchable()->sortable()->toggleable()
                ->description(fn (contact $record): string => $record->email),
                TextColumn::make('phone')->icon('heroicon-o-phone')->copyable()->searchable()->sortable()->toggleable(),
                TextColumn::make('topic')->copyable()->searchable()->sortable()->toggleable(),
                // TextColumn::make('email')->copyable()->searchable()->sortable()->toggleable(),
                TextColumn::make('message')->limit(20)->copyable()->searchable()->sortable()->toggleable(),

                TextColumn::make('status')->searchable()->copyable()->sortable()->toggleable()
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Pending' => 'info',
                    'Open' => 'success',
                    'Closed' => 'gray',
                }),
                    IconColumn::make('seen')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-badge')
                    ->falseIcon('heroicon-o-x-mark')
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
                Tables\Actions\RestoreAction::make(),

                ActionsAction::make('outgoing')->label('Send Email')->hidden(fn($record)=>$record->trashed())
                ->icon('heroicon-o-envelope')
                ->color('gray')
                ->model(inbox::class)
                ->form([

                    TextInput::make('from')
                        ->required()
                        ->readonly()
                        ->email()
                        ->default("info@salty-wave.com"),
                        TextInput::make('to')
                        ->required()
                        ->readonly()
                        ->email()
                        ->default(function($record){
                         return  $record->email;
                        }),
                        TextInput::make('subject')
                        ->required(),
                        Textarea::make('message')
                        ->required(),
                        Textarea::make('attachement')
                        ->required(),

                ])->action(function(inbox $inbox , array $data){

                    $inbox->from = $data['from'];
                    $inbox->to = $data['to'];
                    $inbox->subject = $data['subject'];
                    $inbox->message = $data['message'];

                    $inbox->save();

                    Mail::to($inbox->to)->send(new outgoingMail($inbox));
                }),
                ActionsAction::make('addNote')->label('Edit Note')->hidden(fn($record)=>$record->trashed())
                ->icon('heroicon-s-paper-clip')
                ->model(contact::class)
                ->form([
                    Select::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'Open' => 'Open',
                        'Closed' => 'Closed',
                    ])->native(false),
                    TextInput::make('note')
                        ->maxLength(255),
                ])->action(function(contact $contact , array $data){
                    $contact->note = $data['note'];
                    $contact->status = $data['status'];
                    if($contact->status == "Pending"){
                        $contact->seen =0;
                    }else{
                        $contact->seen =1;
                    }
                    $contact->save();
                }),
                Tables\Actions\ViewAction::make()->hidden(fn($record)=>$record->trashed()),
                Tables\Actions\DeleteAction::make()->hidden(fn($record)=>$record->trashed()),


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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}

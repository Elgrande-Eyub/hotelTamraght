<?php

namespace App\Filament\Resources\NotificationResource\Pages;

use App\Filament\Resources\NotificationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;
class ListNotifications extends ListRecords
{
    protected static string $resource = NotificationResource::class;

    public function getTabs():array {
        return[
            'all' => Tab::make('All '),
            'archived' => Tab::make('Archived')->modifyQueryUsing(function($query){
                return $query->onlyTrashed();
            })
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

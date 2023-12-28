<?php

namespace App\Filament\Widgets;

use App\Models\booking;
use App\Models\contact;
use App\Models\newsletter;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ContactStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Consultations', contact::get()->count()),
            Stat::make('Bookings', booking::get()->count()),
            Stat::make('Newsletters', newsletter::get()->count()),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources\DayTrips\Pages;

use App\Filament\Admin\Resources\DayTrips\DayTripResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDayTrips extends ListRecords
{
    protected static string $resource = DayTripResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

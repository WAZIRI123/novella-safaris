<?php

namespace App\Filament\Admin\Resources\OtherCountryTrips\Pages;

use App\Filament\Admin\Resources\OtherCountryTrips\OtherCountryTripResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOtherCountryTrips extends ListRecords
{
    protected static string $resource = OtherCountryTripResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

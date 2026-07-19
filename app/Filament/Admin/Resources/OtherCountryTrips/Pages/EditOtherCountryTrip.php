<?php

namespace App\Filament\Admin\Resources\OtherCountryTrips\Pages;

use App\Filament\Admin\Resources\OtherCountryTrips\OtherCountryTripResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOtherCountryTrip extends EditRecord
{
    protected static string $resource = OtherCountryTripResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

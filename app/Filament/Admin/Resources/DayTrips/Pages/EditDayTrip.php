<?php

namespace App\Filament\Admin\Resources\DayTrips\Pages;

use App\Filament\Admin\Resources\DayTrips\DayTripResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDayTrip extends EditRecord
{
    protected static string $resource = DayTripResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

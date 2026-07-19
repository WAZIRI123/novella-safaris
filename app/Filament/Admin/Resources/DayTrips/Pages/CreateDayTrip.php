<?php

namespace App\Filament\Admin\Resources\DayTrips\Pages;

use App\Filament\Admin\Resources\DayTrips\DayTripResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDayTrip extends CreateRecord
{
    protected static string $resource = DayTripResource::class;
}

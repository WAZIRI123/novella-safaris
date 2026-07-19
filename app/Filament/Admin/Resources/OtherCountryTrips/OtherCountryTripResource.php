<?php

namespace App\Filament\Admin\Resources\OtherCountryTrips;

use App\Filament\Admin\Resources\OtherCountryTrips\Pages\CreateOtherCountryTrip;
use App\Filament\Admin\Resources\OtherCountryTrips\Pages\EditOtherCountryTrip;
use App\Filament\Admin\Resources\OtherCountryTrips\Pages\ListOtherCountryTrips;
use App\Filament\Admin\Resources\OtherCountryTrips\Schemas\OtherCountryTripForm;
use App\Filament\Admin\Resources\OtherCountryTrips\Tables\OtherCountryTripsTable;
use App\Models\OtherCountryTrip;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OtherCountryTripResource extends Resource
{
    protected static ?string $model = OtherCountryTrip::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return OtherCountryTripForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OtherCountryTripsTable::configure($table);
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
            'index' => ListOtherCountryTrips::route('/'),
            'create' => CreateOtherCountryTrip::route('/create'),
            'edit' => EditOtherCountryTrip::route('/{record}/edit'),
        ];
    }
}

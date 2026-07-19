<?php

namespace App\Filament\Admin\Resources\DayTrips;

use App\Filament\Admin\Resources\DayTrips\Pages\CreateDayTrip;
use App\Filament\Admin\Resources\DayTrips\Pages\EditDayTrip;
use App\Filament\Admin\Resources\DayTrips\Pages\ListDayTrips;
use App\Filament\Admin\Resources\DayTrips\Schemas\DayTripForm;
use App\Filament\Admin\Resources\DayTrips\Tables\DayTripsTable;
use App\Models\DayTrip;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DayTripResource extends Resource
{
    protected static ?string $model = DayTrip::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DayTripForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DayTripsTable::configure($table);
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
            'index' => ListDayTrips::route('/'),
            'create' => CreateDayTrip::route('/create'),
            'edit' => EditDayTrip::route('/{record}/edit'),
        ];
    }
}

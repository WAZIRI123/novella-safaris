<?php

namespace App\Filament\Admin\Resources\TrekkingRoutes;

use App\Filament\Admin\Resources\TrekkingRoutes\Pages\CreateTrekkingRoute;
use App\Filament\Admin\Resources\TrekkingRoutes\Pages\EditTrekkingRoute;
use App\Filament\Admin\Resources\TrekkingRoutes\Pages\ListTrekkingRoutes;
use App\Filament\Admin\Resources\TrekkingRoutes\Schemas\TrekkingRouteForm;
use App\Filament\Admin\Resources\TrekkingRoutes\Tables\TrekkingRoutesTable;
use App\Models\TrekkingRoute;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TrekkingRouteResource extends Resource
{
    protected static ?string $model = TrekkingRoute::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TrekkingRouteForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TrekkingRoutesTable::configure($table);
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
            'index' => ListTrekkingRoutes::route('/'),
            'create' => CreateTrekkingRoute::route('/create'),
            'edit' => EditTrekkingRoute::route('/{record}/edit'),
        ];
    }
}

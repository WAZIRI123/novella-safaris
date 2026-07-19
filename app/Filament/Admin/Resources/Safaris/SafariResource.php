<?php

namespace App\Filament\Admin\Resources\Safaris;

use App\Filament\Admin\Resources\Safaris\Pages\CreateSafari;
use App\Filament\Admin\Resources\Safaris\Pages\EditSafari;
use App\Filament\Admin\Resources\Safaris\Pages\ListSafaris;
use App\Filament\Admin\Resources\Safaris\Schemas\SafariForm;
use App\Filament\Admin\Resources\Safaris\Tables\SafarisTable;
use App\Models\Safari;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SafariResource extends Resource
{
    protected static ?string $model = Safari::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SafariForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SafarisTable::configure($table);
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
            'index' => ListSafaris::route('/'),
            'create' => CreateSafari::route('/create'),
            'edit' => EditSafari::route('/{record}/edit'),
        ];
    }
}

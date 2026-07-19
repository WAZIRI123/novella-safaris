<?php

namespace App\Filament\Admin\Resources\ZanzibarPackages;

use App\Filament\Admin\Resources\ZanzibarPackages\Pages\CreateZanzibarPackage;
use App\Filament\Admin\Resources\ZanzibarPackages\Pages\EditZanzibarPackage;
use App\Filament\Admin\Resources\ZanzibarPackages\Pages\ListZanzibarPackages;
use App\Filament\Admin\Resources\ZanzibarPackages\Schemas\ZanzibarPackageForm;
use App\Filament\Admin\Resources\ZanzibarPackages\Tables\ZanzibarPackagesTable;
use App\Models\ZanzibarPackage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ZanzibarPackageResource extends Resource
{
    protected static ?string $model = ZanzibarPackage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ZanzibarPackageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ZanzibarPackagesTable::configure($table);
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
            'index' => ListZanzibarPackages::route('/'),
            'create' => CreateZanzibarPackage::route('/create'),
            'edit' => EditZanzibarPackage::route('/{record}/edit'),
        ];
    }
}

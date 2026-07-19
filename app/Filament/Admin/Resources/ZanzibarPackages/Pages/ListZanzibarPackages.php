<?php

namespace App\Filament\Admin\Resources\ZanzibarPackages\Pages;

use App\Filament\Admin\Resources\ZanzibarPackages\ZanzibarPackageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListZanzibarPackages extends ListRecords
{
    protected static string $resource = ZanzibarPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

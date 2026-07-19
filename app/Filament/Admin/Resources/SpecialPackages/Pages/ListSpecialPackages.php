<?php

namespace App\Filament\Admin\Resources\SpecialPackages\Pages;

use App\Filament\Admin\Resources\SpecialPackages\SpecialPackageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSpecialPackages extends ListRecords
{
    protected static string $resource = SpecialPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

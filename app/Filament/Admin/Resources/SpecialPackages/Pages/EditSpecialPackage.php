<?php

namespace App\Filament\Admin\Resources\SpecialPackages\Pages;

use App\Filament\Admin\Resources\SpecialPackages\SpecialPackageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSpecialPackage extends EditRecord
{
    protected static string $resource = SpecialPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

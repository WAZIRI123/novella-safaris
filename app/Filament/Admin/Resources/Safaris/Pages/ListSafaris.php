<?php

namespace App\Filament\Admin\Resources\Safaris\Pages;

use App\Filament\Admin\Resources\Safaris\SafariResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSafaris extends ListRecords
{
    protected static string $resource = SafariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

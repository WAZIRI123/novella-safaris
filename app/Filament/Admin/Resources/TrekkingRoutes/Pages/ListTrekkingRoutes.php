<?php

namespace App\Filament\Admin\Resources\TrekkingRoutes\Pages;

use App\Filament\Admin\Resources\TrekkingRoutes\TrekkingRouteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTrekkingRoutes extends ListRecords
{
    protected static string $resource = TrekkingRouteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources\TrekkingRoutes\Pages;

use App\Filament\Admin\Resources\TrekkingRoutes\TrekkingRouteResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTrekkingRoute extends EditRecord
{
    protected static string $resource = TrekkingRouteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\TerritoryTypeResource\Pages;

use App\Filament\Resources\TerritoryTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTerritoryType extends ViewRecord
{
    protected static string $resource = TerritoryTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

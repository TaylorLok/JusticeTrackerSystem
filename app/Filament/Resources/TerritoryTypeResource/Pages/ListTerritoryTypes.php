<?php

namespace App\Filament\Resources\TerritoryTypeResource\Pages;

use App\Filament\Resources\TerritoryTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTerritoryTypes extends ListRecords
{
    protected static string $resource = TerritoryTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

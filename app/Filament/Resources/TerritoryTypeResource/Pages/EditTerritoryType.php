<?php

namespace App\Filament\Resources\TerritoryTypeResource\Pages;

use App\Filament\Resources\TerritoryTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTerritoryType extends EditRecord
{
    protected static string $resource = TerritoryTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

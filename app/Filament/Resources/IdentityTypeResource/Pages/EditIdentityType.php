<?php

namespace App\Filament\Resources\IdentityTypeResource\Pages;

use App\Filament\Resources\IdentityTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIdentityType extends EditRecord
{
    protected static string $resource = IdentityTypeResource::class;

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

<?php

namespace App\Filament\Resources\IdentityTypeResource\Pages;

use App\Filament\Resources\IdentityTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIdentityType extends ViewRecord
{
    protected static string $resource = IdentityTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\AvenueResource\Pages;

use App\Filament\Resources\AvenueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAvenue extends EditRecord
{
    protected static string $resource = AvenueResource::class;

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

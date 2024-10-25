<?php

namespace App\Filament\Resources\AvenueResource\Pages;

use App\Filament\Resources\AvenueResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAvenue extends ViewRecord
{
    protected static string $resource = AvenueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

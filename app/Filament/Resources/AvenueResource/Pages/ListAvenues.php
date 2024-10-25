<?php

namespace App\Filament\Resources\AvenueResource\Pages;

use App\Filament\Resources\AvenueResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAvenues extends ListRecords
{
    protected static string $resource = AvenueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

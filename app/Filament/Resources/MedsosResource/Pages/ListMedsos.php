<?php

namespace App\Filament\Resources\MedsosResource\Pages;

use App\Filament\Resources\MedsosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedsos extends ListRecords
{
    protected static string $resource = MedsosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}

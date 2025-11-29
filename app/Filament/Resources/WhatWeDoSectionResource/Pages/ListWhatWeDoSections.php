<?php

namespace App\Filament\Resources\WhatWeDoSectionResource\Pages;

use App\Filament\Resources\WhatWeDoSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhatWeDoSections extends ListRecords
{
    protected static string $resource = WhatWeDoSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

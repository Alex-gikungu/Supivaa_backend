<?php

namespace App\Filament\Resources\CTASectionResource\Pages;

use App\Filament\Resources\CTASectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCTASection extends EditRecord
{
    protected static string $resource = CTASectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

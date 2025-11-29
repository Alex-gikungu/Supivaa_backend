<?php

namespace App\Filament\Resources\ApproachStepResource\Pages;

use App\Filament\Resources\ApproachStepResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApproachSteps extends ListRecords
{
    protected static string $resource = ApproachStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

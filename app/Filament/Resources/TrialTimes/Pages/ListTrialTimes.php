<?php

namespace App\Filament\Resources\TrialTimes\Pages;

use App\Filament\Resources\TrialTimes\TrialTimeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTrialTimes extends ListRecords
{
    protected static string $resource = TrialTimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

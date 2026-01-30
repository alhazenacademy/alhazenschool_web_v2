<?php

namespace App\Filament\Resources\TrialTimes\Pages;

use App\Filament\Resources\TrialTimes\TrialTimeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTrialTime extends EditRecord
{
    protected static string $resource = TrialTimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\InformationSources\Pages;

use App\Filament\Resources\InformationSources\InformationSourceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInformationSource extends EditRecord
{
    protected static string $resource = InformationSourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

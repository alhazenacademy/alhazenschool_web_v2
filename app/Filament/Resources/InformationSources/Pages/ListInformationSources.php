<?php

namespace App\Filament\Resources\InformationSources\Pages;

use App\Filament\Resources\InformationSources\InformationSourceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInformationSources extends ListRecords
{
    protected static string $resource = InformationSourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

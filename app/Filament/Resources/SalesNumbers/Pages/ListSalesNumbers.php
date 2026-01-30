<?php

namespace App\Filament\Resources\SalesNumbers\Pages;

use App\Filament\Resources\SalesNumbers\SalesNumberResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSalesNumbers extends ListRecords
{
    protected static string $resource = SalesNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

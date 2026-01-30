<?php

namespace App\Filament\Resources\SalesNumbers\Pages;

use App\Filament\Resources\SalesNumbers\SalesNumberResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSalesNumber extends EditRecord
{
    protected static string $resource = SalesNumberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

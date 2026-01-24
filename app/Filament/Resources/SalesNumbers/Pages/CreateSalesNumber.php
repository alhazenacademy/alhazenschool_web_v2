<?php

namespace App\Filament\Resources\SalesNumbers\Pages;

use App\Filament\Resources\SalesNumbers\SalesNumberResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSalesNumber extends CreateRecord
{
    protected static string $resource = SalesNumberResource::class;
    
    protected function getRedirectUrl(): string
    {
        // Setelah create, kembali ke tabel (halaman index/list)
        return $this->getResource()::getUrl('index');
    }
}

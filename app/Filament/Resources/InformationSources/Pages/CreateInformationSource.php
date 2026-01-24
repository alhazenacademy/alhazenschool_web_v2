<?php

namespace App\Filament\Resources\InformationSources\Pages;

use App\Filament\Resources\InformationSources\InformationSourceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateInformationSource extends CreateRecord
{
    protected static string $resource = InformationSourceResource::class;
    
    protected function getRedirectUrl(): string
    {
        // Setelah create, kembali ke tabel (halaman index/list)
        return $this->getResource()::getUrl('index');
    }
}

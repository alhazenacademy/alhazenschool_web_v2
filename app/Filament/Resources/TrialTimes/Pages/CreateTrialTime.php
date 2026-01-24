<?php

namespace App\Filament\Resources\TrialTimes\Pages;

use App\Filament\Resources\TrialTimes\TrialTimeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTrialTime extends CreateRecord
{
    protected static string $resource = TrialTimeResource::class;
    
    protected function getRedirectUrl(): string
    {
        // Setelah create, kembali ke tabel (halaman index/list)
        return $this->getResource()::getUrl('index');
    }
}

<?php

namespace App\Filament\Resources\Tutors\Pages;

use App\Filament\Resources\Tutors\TutorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTutor extends CreateRecord
{
    protected static string $resource = TutorResource::class;
    
    protected function getRedirectUrl(): string
    {
        // Setelah create, kembali ke tabel (halaman index/list)
        return $this->getResource()::getUrl('index');
    }
}

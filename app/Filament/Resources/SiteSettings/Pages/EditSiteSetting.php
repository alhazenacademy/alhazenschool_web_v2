<?php

namespace App\Filament\Resources\SiteSettings\Pages;

use App\Filament\Resources\SiteSettings\SiteSettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSiteSetting extends EditRecord
{
    protected static string $resource = SiteSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // DeleteAction::make(),
        ];
    }

    /**
     * Saat form diisi (edit):
     * - Ambil settings['socials'] → taruh ke field 'socials'
     * - Hapus 'socials' dari settings supaya KeyValue tidak [object Object]
     */
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $settings = $data['settings'] ?? [];

        $data['socials'] = $settings['socials'] ?? [];
        unset($settings['socials']);

        $data['settings'] = $settings;

        return $data;
    }

    /**
     * Saat disimpan:
     * - Gabungkan kembali field 'socials' ke dalam settings['socials']
     * - Hapus field 'socials' dari payload sebelum ke model
     */
    protected function mutateFormDataBeforeSave(array $data): array
    {
        $settings = $data['settings'] ?? [];
        $socials  = $data['socials'] ?? [];

        $settings['socials'] = $socials;

        $data['settings'] = $settings;
        unset($data['socials']);

        return $data;
    }
}

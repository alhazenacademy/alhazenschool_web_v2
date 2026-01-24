<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Utilities\Get;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Site Settings')
                    ->lazy()
                    ->description('Konfigurasi pengaturan situs, termasuk field JSON dan social media.')
                    ->columns(1)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('key')
                            ->label('Key')
                            ->required()
                            ->maxLength(150)
                            ->helperText('Contoh: company_profile, homepage_hero, contact_info')
                            // di edit tidak boleh diubah
                            ->disabled(fn($record) => $record !== null),

                        // 🧩 SETTINGS DALAM BENTUK KEY VALUE
                        KeyValue::make('settings')
                            ->label('Settings')
                            ->keyLabel('Field')
                            ->valueLabel('Value')
                            ->reorderable()
                            ->addButtonLabel('Tambah field')
                            ->helperText('Nilai disimpan sebagai JSON di kolom "settings".')
                            ->columnSpanFull(),

                        // ⭐ SOCIALS DI DALAM SECTION YANG SAMA
                        Repeater::make('socials')
                            ->label('Social Media')
                            ->schema([
                                TextInput::make('platform')
                                    ->label('Platform')
                                    ->placeholder('facebook, instagram, tiktok')
                                    ->required(),

                                TextInput::make('label')
                                    ->label('Label')
                                    ->placeholder('Facebook, Instagram')
                                    ->required(),

                                TextInput::make('handle')
                                    ->label('Handle')
                                    ->placeholder('@alhazenacademy'),

                                TextInput::make('href')
                                    ->label('URL')
                                    ->placeholder('https://instagram.com/alhazenacademy')
                                    ->required(),

                                FileUpload::make('icon_path')
                                    ->label('Icon')
                                    ->disk('public_assets')                        // root: public/
                                    ->directory('assets/kids/index-footer')        // hasil: assets/kids/index-footer/xxx.png
                                    ->image()
                                    ->imageEditor()
                                    ->preserveFilenames(false)                     // penting: supaya nama custom kita dipakai
                                    ->getUploadedFileNameForStorageUsing(
                                        function (TemporaryUploadedFile $file, Get $get): string {
                                            $disk = Storage::disk('public_assets');
                                            $directory = 'assets/kids/index-footer';

                                            // Ambil platform dari repeater row ini
                                            $platform = $get('platform'); // misal: "YouTube", "Instagram"
                                
                                            // Kalau platform kosong, pakai nama file asli sebagai fallback
                                            $baseSlug = $platform
                                                ? Str::slug($platform)
                                                : Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));

                                            // Base name: icon-{slug_platform}
                                            $baseName = 'icon-' . $baseSlug;      // contoh: "icon-youtube"
                                            $extension = $file->getClientOriginalExtension();
                                            $filename = $baseName . '.' . $extension;

                                            // Kalau nama sudah dipakai, tambahkan angka: icon-youtube-2.png, icon-youtube-3.png, ...
                                            $counter = 2;
                                            while ($disk->exists($directory . '/' . $filename)) {
                                                $filename = $baseName . '-' . $counter . '.' . $extension;
                                                $counter++;
                                            }

                                            return $filename;
                                        }
                                    )
                                    ->openable()
                                    ->downloadable()
                                    ->helperText('Icon untuk footer. Disimpan di /assets/kids/index-footer dan path-nya disimpan di JSON.'),

                                Toggle::make('is_active')
                                    ->label('Aktif')
                                    ->helperText('Jika nonaktif, social media ini tidak akan ditampilkan di halaman publik.')
                                    ->default(true),

                                TextInput::make('sort_order')
                                    ->label('Urutan')
                                    ->numeric()
                                    ->default(function (Get $get) {
                                        $items = $get('../../socials') ?? [];

                                        if (!is_array($items) || empty($items)) {
                                            return 1;
                                        }

                                        $max = collect($items)
                                            ->pluck('sort_order')
                                            ->filter()
                                            ->max() ?? 0;

                                        return $max + 1;
                                    }),
                            ])
                            ->addActionLabel('Tambah Social Media')
                            ->columnSpanFull()
                            ->mutateDehydratedStateUsing(function (array $state): array {
                                return collect($state)
                                    ->values()
                                    ->map(function (array $item, int $index) {
                                        $item['sort_order'] = $index + 1;
                                        return $item;
                                    })
                                    ->all();
                            }),
                    ]),
            ]);
    }
}

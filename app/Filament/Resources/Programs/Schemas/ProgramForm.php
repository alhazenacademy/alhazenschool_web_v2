<?php

namespace App\Filament\Resources\Programs\Schemas;

use App\Models\Program;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class ProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // 🚩 Bagian utama Program (tabel programs)
                Section::make('Program')
                    ->lazy()
                    ->description('Data utama program yang dipakai di sistem dan trial class.')
                    ->columns(2)
                    ->columnSpan('full')
                    ->schema([
                        TextInput::make('key')
                            ->label('Key')
                            ->required()
                            ->maxLength(50)
                            ->helperText('Key unik untuk identifikasi di code, misalnya: coding_kids, roblox_studio.')
                            ->disabled(fn($record) => $record !== null), // kalau edit, key dikunci

                        TextInput::make('name')
                            ->label('Nama Program')
                            ->required()
                            ->maxLength(150)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Set $set, Get $get) {
                                if (!filled($state)) {
                                    return;
                                }

                                $set('slug', Str::slug($state));

                                // akses title di dalam relasi "info"
                                $currentTitle = $get('info.title');
                                if (blank($currentTitle)) {
                                    $set('info.title', $state);
                                }

                                // akses cta_text di dalam relasi "info"
                                $currentCta = $get('info.cta_text');
                                if (blank($currentCta)) {
                                    $set('info.cta_text', 'Coba Kelas ' . $state);
                                }
                            }),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->maxLength(150)
                            ->disabled()
                            ->dehydrated()
                            ->helperText('Otomatis dari nama, dipakai untuk URL / identifier.'),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->required()
                            ->default(fn() => (Program::max('sort_order') ?? 0) + 1),

                    ]),

                // 🧩 Bagian Landing / Detail (tabel program_infos, relasi hasOne: info)
                Section::make('Landing / Detail Program')
                    ->lazy()
                    ->description('Konten yang dipakai di landing page program.')
                    ->relationship('info') // <-- penting: ini binding ke ProgramInfo
                    ->columns(2)
                    ->columnSpan('full')
                    ->schema([
                        Select::make('context')
                            ->label('Context')
                            ->options([
                                'kids_landing' => 'Kids Landing',
                                'adult_landing' => 'Adult Landing',
                            ])
                            ->native(false) // dropdown yang lebih enak dipakai di Filament
                            ->placeholder('Pilih context')
                            ->helperText('Pilih jenis landing untuk program ini.')
                            ->required()
                            ->default('kids_landing'),

                        TextInput::make('title')
                            ->label('Judul Utama')
                            ->required()
                            ->maxLength(150),

                        TextInput::make('subtitle')
                            ->label('Subjudul')
                            ->required()
                            ->maxLength(200),

                        TextInput::make('short_tagline')
                            ->label('Tagline Pendek')
                            ->required()
                            ->maxLength(200)
                            ->helperText('Boleh sama dengan subjudul.'),

                        TextInput::make('modules_label')
                            ->label('Total Modul')
                            ->required()
                            ->placeholder('10'),

                        TextInput::make('students_label')
                            ->label('Total Siswa')
                            ->required()
                            ->placeholder('100+'),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),

                        TagsInput::make('tools')
                            ->label('Tools yang Dipakai')
                            ->required()
                            ->placeholder('Tambah nama tools...')
                            ->helperText('Disimpan sebagai array, misalnya: Scratch, Roblox Studio, Figma.'),

                        TextInput::make('price_label')
                            ->label('Label Harga')
                            ->required()
                            ->maxLength(100),

                        TextInput::make('cta_text')
                            ->label('Teks Tombol CTA')
                            ->required()
                            ->maxLength(100),

                        TextInput::make('cta_href')
                            ->label('Link CTA')
                            ->required()
                            ->maxLength(200),

                        FileUpload::make('icon_path')
                            ->label('Icon Program')
                            ->disk('public_assets')                      // disk yg root-nya public/
                            ->directory('assets/kids/program-detail')     // folder utama
                            ->image()
                            ->imageEditor()
                            ->preserveFilenames()
                            ->openable()
                            ->downloadable()
                            ->required()
                            ->getUploadedFileNameForStorageUsing(
                                /**
                                 * @param  TemporaryUploadedFile  $file
                                 * @param  \App\Models\ProgramInfo|null  $record
                                 */
                                function ($file, $record) {
                                    // kalau belum ada record (create pertama kali), fallback pakai timestamp
                                    $number = $record?->program_id ?? time();

                                    $extension = $file->getClientOriginalExtension();

                                    return 'icon-program' . $number . '.' . $extension;
                                }
                            )
                            ->helperText('Icon program disimpan di /assets/kids/program-detail dan path-nya disimpan di kolom icon_path.'),

                        FileUpload::make('child_image_path')
                            ->label('Gambar Anak / Hero')
                            ->disk('public')
                            ->directory('uploads/program')
                            ->image()
                            ->preserveFilenames()
                            ->openable()
                            ->downloadable()
                            ->getUploadedFileNameForStorageUsing(
                                /**
                                 * @param  TemporaryUploadedFile  $file
                                 * @param  \App\Models\ProgramInfo|null  $record
                                 */
                                function ($file, $record) {
                                    // kalau belum ada record (create pertama kali), fallback pakai timestamp
                                    $number = $record?->program_id ?? time();

                                    $extension = $file->getClientOriginalExtension();

                                    return 'anak' . $number . '.' . $extension;
                                }
                            )
                            ->helperText('Biarkan kosong untuk memakai gambar default.'),

                        TextInput::make('bg_class')
                            ->label('BG Class (Tailwind)')
                            ->placeholder('bg-[#E5E7EB]')
                            ->required()
                            ->default('bg-[#E5E7EB]'),

                        TextInput::make('text_color_class')
                            ->label('Text Color Class (Tailwind)')
                            ->placeholder('text-[#0F172A]')
                            ->required()
                            ->default('text-[#0F172A]'),
                    ]),

                // 🔹 Section pengaturan tampilan (is_active, is_home, is_trial)
                Section::make('Pengaturan Tampilan')
                    ->lazy()
                    ->description('Atur apakah program muncul di halaman home dan form trial.')
                    ->columns(4)
                    ->columnSpan('full')
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true)
                            ->required()
                            ->reactive()
                            ->helperText('Jika nonaktif, program tidak muncul di mana pun.')
                            ->afterStateUpdated(function (bool $state, callable $set) {
                                // Kalau program dinonaktifkan, paksa yang lain ikut mati
                                if (!$state) {
                                    $set('is_trial', false);
                                    $set('is_home', false);
                                }
                            }),

                        Toggle::make('is_home')
                            ->label('Muncul di Home')
                            ->default(false)
                            ->helperText('Tandai jika program ini ditampilkan sebagai kartu di halaman utama.')
                            ->disabled(fn(Get $get) => !$get('is_active')),
                        
                        Toggle::make('is_lainnya')
                            ->label('Muncul di Lainnya')
                            ->default(false)
                            ->helperText('Tandai jika program ini ditampilkan di bagian "Lainnya" pada halaman program.')
                            ->disabled(fn(Get $get) => !$get('is_active')),

                        Toggle::make('is_trial')
                            ->label('Muncul di Trial Class')
                            ->default(false)
                            ->helperText('Tandai jika program ini bisa dipilih di form Trial Class.')
                            ->disabled(fn(Get $get) => !$get('is_active')),
                    ]),
            ]);
    }
}

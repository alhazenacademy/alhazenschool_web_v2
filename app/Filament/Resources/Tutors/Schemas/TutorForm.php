<?php

namespace App\Filament\Resources\Tutors\Schemas;

use App\Models\Tutor;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class TutorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Profil Pengajar')
                    ->lazy()
                    ->description('Data dasar pengajar Alhazen.')
                    ->columns(columns: 2)
                    ->columnSpan('full')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(120)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->disabled()
                            ->dehydrated()
                            ->maxLength(120),

                        TextInput::make('years')
                            ->label('Pengalaman (Tahun)')
                            ->numeric()
                            ->default(1)
                            ->minValue(0),

                        TextInput::make('skills')
                            ->label('Keahlian')
                            ->helperText('Pisahkan dengan koma, misalnya: Python, HTML, CSS')
                            ->maxLength(255)
                            ->required(),

                        Textarea::make('bio')
                            ->label('Bio Singkat')
                            ->rows(3)
                            ->maxLength(500),

                        Select::make('gender')
                            ->label('Jenis Kelamin')
                            ->options([
                                'male' => 'Laki-laki',
                                'female' => 'Perempuan',
                            ])
                            ->required()
                            ->native(false)
                            ->default('male'),

                        Radio::make('bg_color')
                            ->label('Warna Latar')
                            ->options([
                                '#FACC15' => 'Kuning (#FACC15)',
                                '#059669' => 'Hijau (#059669)',
                                '#F97316' => 'Oranye (#F97316)',
                            ])
                            ->default('#FACC15')
                            ->inline(),

                        FileUpload::make('photo')
                            ->label('Foto Tutor')
                            ->disk('public')
                            ->directory('uploads/tutors')
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, callable $get) {
                                // Ambil slug kalau sudah ada, kalau belum slug dari name
                                $slug = $get('slug') ?? Str::slug($get('name') ?? 'tutor');

                                $extension = $file->getClientOriginalExtension();

                                return "{$slug}-photo.{$extension}";
                            })
                            ->image()
                            ->imageEditor()
                            ->previewable()
                            ->maxSize(2048),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->required()
                            ->helperText('Jika nonaktif, data tutor ini tidak akan ditampilkan di halaman publik.')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->required()
                            ->default(fn() => (Tutor::max('sort_order') ?? 0) + 1),
                    ]),
            ]);
    }
}

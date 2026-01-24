<?php

namespace App\Filament\Resources\SalesNumbers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SalesNumberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Nomor Sales')
                    ->lazy()
                    ->description('Atur data nomor sales untuk trial class.')
                    ->columns(columns: 1)
                    ->columnSpan('full')
                    ->schema([
                        TextInput::make('sales_name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(120)
                            ->live(onBlur: true),

                        TextInput::make('phone_number')
                            ->label('Nomor Telepon')
                            ->required()
                            ->tel()
                            ->placeholder('contoh: 0813 9000 0332 / +62 813 9000 0332')
                            ->maxLength(16)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, callable $set) {
                                // 1. Ambil hanya digit (hapus spasi, +, -, dll)
                                $number = preg_replace('/\D+/', '', $state ?? '');

                                // 2. Kalau kosong, langsung set kosong
                                if ($number === '') {
                                    $set('phone_number', null);
                                    return;
                                }

                                // 3. Normalisasi ke format 62...
                                if (str_starts_with($number, '0')) {
                                    // 0813xxxx -> 62813xxxx
                                    $number = '62' . substr($number, 1);
                                } elseif (str_starts_with($number, '8')) {
                                    // 813xxxx -> 62813xxxx
                                    $number = '62' . $number;
                                } elseif (!str_starts_with($number, '62')) {
                                    // Kalau formatnya aneh (tidak 0, tidak 8, tidak 62)
                                    // kamu bisa pilih: tetap dibiarkan atau dipaksa tambahkan 62
                                    $number = '62' . $number;
                                }

                                // 4. Set balik ke field
                                $set('phone_number', $number);
                            })
                            ->rule('regex:/^[0-9]+$/'),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->required()
                            ->helperText('Jika nonaktif, nomor sales ini tidak akan ditampilkan di halaman publik.')
                            ->default(true),
                    ]),
            ]);
    }
}

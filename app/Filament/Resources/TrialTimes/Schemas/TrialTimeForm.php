<?php

namespace App\Filament\Resources\TrialTimes\Schemas;

use App\Models\TrialTime;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TrialTimeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Waktu Trial Class')
                    ->lazy()
                    ->description('Atur waktu trial class yang tersedia.')
                    ->columns(columns: 1)
                    ->columnSpan('full')
                    ->schema([
                        TimePicker::make('time')
                            ->label('Waktu')
                            ->required(),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->required()
                            ->helperText('Jika nonaktif, waktu trial class ini tidak akan ditampilkan di halaman publik.')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->required()
                            ->numeric()
                            ->default(fn() => (TrialTime::max('sort_order') ?? 0) + 1),
                    ]),
            ]);
    }
}

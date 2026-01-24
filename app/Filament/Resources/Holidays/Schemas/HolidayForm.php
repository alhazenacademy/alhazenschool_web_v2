<?php

namespace App\Filament\Resources\Holidays\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class HolidayForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Hari Libur')
                    ->lazy()
                    ->description('Atur detail hari libur.')
                    ->columns(columns: 1)
                    ->columnSpan('full')
                    ->schema([
                        DatePicker::make('date')
                            ->label('Tanggal')
                            ->required()
                            ->unique(ignoreRecord: true),
                        TextInput::make('label')
                            ->label('Keterangan')
                            ->placeholder('Contoh: Idul Fitri')
                            ->required()
                    ])
            ]);
    }
}

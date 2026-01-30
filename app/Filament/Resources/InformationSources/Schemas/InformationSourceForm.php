<?php

namespace App\Filament\Resources\InformationSources\Schemas;

use App\Models\InformationSource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InformationSourceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Sumber Informasi')
                    ->lazy()
                    ->description('Atur detail sumber informasi untuk trial class.')
                    ->columns(columns: 1)
                    ->columnSpan('full')
                    ->schema([
                        TextInput::make('name')
                            ->label('Sumber Informasi')
                            ->required()
                            ->maxLength(150),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->required()
                            ->helperText('Jika nonaktif, data sumber informasi ini tidak akan ditampilkan di halaman publik.')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->required()
                            ->numeric()
                            ->default(fn() => (InformationSource::max('sort_order') ?? 0) + 1),
                    ]),
            ]);
    }
}

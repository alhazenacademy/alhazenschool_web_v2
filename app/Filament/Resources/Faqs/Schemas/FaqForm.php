<?php

namespace App\Filament\Resources\Faqs\Schemas;

use App\Models\Faq;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('FAQ Details')
                    ->lazy()
                    ->description('Isi pertanyaan dan jawabannya di bawah ini.')
                    ->columns(1)
                    ->columnSpan('full')
                    ->schema([
                        TextInput::make('question')
                            ->label('Pertanyaan')
                            ->required()
                            ->maxLength(255),

                        Textarea::make('answer')
                            ->label('Jawaban')
                            ->rows(4)
                            ->required()
                            ->maxLength(2000),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->required()
                            ->helperText('Jika nonaktif, FAQ ini tidak akan ditampilkan di halaman publik.')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->required()
                            ->default(fn() => (Faq::max('sort_order') ?? 0) + 1),
                    ]),
            ]);
    }
}

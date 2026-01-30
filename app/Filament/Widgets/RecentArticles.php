<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class RecentArticles extends TableWidget
{
    protected static ?string $heading = 'Artikel Terbaru';

    protected int|string|array $columnSpan = [
        'default' => 1,
        'md'      => 2,
        'xl'      => 3,
    ];

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Article::query()
                    ->latest('published_at')
                    ->limit(5)
            )
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->limit(40),

                TextColumn::make('category.name')
                    ->label('Kategori'),

                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'warning'  => 'draft',
                        'info'     => 'scheduled',
                        'success'  => 'published',
                        'gray'     => 'archived',
                    ]),

                TextColumn::make('published_at')
                    ->label('Publish')
                    ->dateTime('d M Y'),
            ])
            ->paginated(false);
    }
}

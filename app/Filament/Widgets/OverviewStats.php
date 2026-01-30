<?php

namespace App\Filament\Widgets;

use App\Models\Faq;
use App\Models\Tutor;
use App\Models\Article;
use App\Models\Program;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OverviewStats extends StatsOverviewWidget
{
    protected ?string $heading = 'Ringkasan Utama';

    protected int|string|array $columnSpan = [
        'default' => 1,
        'md' => 2,
        'xl' => 2, // tidak full width
    ];

    protected function getStats(): array
    {
        return [
            Stat::make('Program Aktif', Program::where('is_active', true)->count())
                ->description('Total program yang tayang')
                ->icon('heroicon-o-academic-cap'),

            Stat::make('Artikel Publish', Article::where('status', 'published')->count())
                ->description('Artikel yang sudah tayang')
                ->icon('heroicon-o-newspaper'),

            Stat::make('Tutor Aktif', Tutor::active()->count())
                ->description('Tutor yang tampil di halaman kids')
                ->icon('heroicon-o-user-group'),

            Stat::make('FAQ Aktif', Faq::active()->count())
                ->description('FAQ yang muncul di frontend')
                ->icon('heroicon-o-question-mark-circle'),
        ];
    }
}

<?php

namespace App\Filament\Widgets;

use App\Models\TrialClass;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TrialOverview extends StatsOverviewWidget
{
    protected ?string $heading = 'Trial Class Overview';

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        // TODO: ganti logic di bawah ini sesuai model trial kamu
        $today = now()->toDateString();

        $trialToday = TrialClass::whereDate('created_at', $today)->count();   // misal TrialRegistration::whereDate('date', $today)->count();
        $trialMonth = TrialClass::whereMonth('created_at', now()->month)->count();   // misal TrialRegistration::whereMonth('date', now()->month)->count();
        $trialMonth = TrialClass::whereYear('created_at', now()->year)->count();   // misal TrialRegistration::whereMonth('date', now()->month)->count();

        return [
            Stat::make('Trial Hari Ini', $trialToday)
                ->description('Total pendaftar trial hari ini')
                ->icon('heroicon-o-calendar-days'),

            Stat::make('Trial Bulan Ini', $trialMonth)
                ->description('Total pendaftar trial bulan ini')
                ->icon('heroicon-o-calendar-days'),

            Stat::make('Trial Tahun Ini', $trialMonth)
                ->description('Total pendaftar trial tahun ini')
                ->icon('heroicon-o-calendar-days'),
        ];
    }
}

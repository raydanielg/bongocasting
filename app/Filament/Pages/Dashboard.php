<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets;

use Filament\Support\Icons\Heroicon;

class Dashboard extends BaseDashboard
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHome;
    
    protected string $view = 'filament.pages.dashboard';
    
    public function getWidgets(): array
    {
        return [
            Widgets\AccountWidget::class,
            Widgets\FilamentInfoWidget::class,
            \App\Filament\Widgets\StatsOverview::class,
            \App\Filament\Widgets\RecentBookings::class,
            \App\Filament\Widgets\RevenueChart::class,
            \App\Filament\Widgets\TopTalents::class,
        ];
    }
}

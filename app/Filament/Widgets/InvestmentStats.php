<?php

namespace App\Filament\Widgets;

use App\Models\Investment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class InvestmentStats extends BaseWidget
{

    protected ?string $heading = 'Investment Overview';
    
    protected function getStats(): array
    {
        return [
            Stat::make('Total Investments', Investment::count()),

            Stat::make(
                'Active Investments',
                Investment::where('completed', false)->count()
            ),

            Stat::make(
                'Completed Investments',
                Investment::where('completed', true)->count()
            ),

            Stat::make(
                'Capital Invested',
                number_format(Investment::sum('amount'), 2)
            ),
        ];
    }
}
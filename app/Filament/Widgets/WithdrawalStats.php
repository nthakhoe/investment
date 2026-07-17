<?php

namespace App\Filament\Widgets;

use App\Models\Withdrawal;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class WithdrawalStats extends BaseWidget
{

    protected ?string $heading = 'Withdrawal Overview';
    
    protected function getStats(): array
    {

        return [
            Stat::make(
                'Pending',
                Withdrawal::where('status', 'pending')->count()
            ),

            Stat::make(
                'Approved',
                Withdrawal::where('status', 'approved')->count()
            ),

            Stat::make(
                'Paid',
                Withdrawal::where('status', 'paid')->count()
            ),

            Stat::make(
                'Total Requested',
                '' . number_format(
                    Withdrawal::sum('amount'),
                    2
                )
            ),
        ];
    }
}
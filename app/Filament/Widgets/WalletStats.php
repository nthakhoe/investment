<?php

namespace App\Filament\Widgets;

use App\Models\Wallet;
use App\Models\WalletTransaction;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class WalletStats extends StatsOverviewWidget
{

    protected ?string $heading = 'Wallets Overview';

    protected function getStats(): array
    {
        return [

            Stat::make(
                'Total Wallet Balance',
                Wallet::sum('balance')
            ),

            Stat::make(
                'Wallets',
                Wallet::count()
            ),

            Stat::make(
                'Credits',
                WalletTransaction::where(
                    'type',
                    'credit'
                )->sum('amount')
            ),

            Stat::make(
                'Debits',
                WalletTransaction::where(
                    'type',
                    'debit'
                )->sum('amount')
            ),
        ];
    }
}

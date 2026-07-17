<?php

namespace App\Services;

use App\Models\Investment;
use App\Models\WalletTransaction;
use Carbon\Carbon;

class InvestService
{
    public function invest($user, $package)
    {

        if ($user->wallet_balance < $package->price) {
            throw new \Exception("Insufficient balance");
        }

        $user->decrement('wallet_balance', $package->price);

        $user->increment('total_invested', $package->price);

        WalletTransaction::create([
            'user_id'=>$user->id,
            'type'=>'investment',
            'amount'=>$package->price
        ]);

        Investment::create([
            'user_id'=>$user->id,
            'package_id'=>$package->id,
            'amount'=>$package->price,
            'total_weeks'=>$package->duration_weeks,
            'next_payout_date'=>Carbon::now()->addWeek()
        ]);
    }
}
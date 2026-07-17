<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function store(Package $package)
    {
        $user = auth()->user();

        if ($user->wallet->balance < $package->price) {

            return back()->with(
                'error',
                'Insufficient wallet balance'
            );
        }

        Investment::create([

            'user_id' => $user->id,

            'package_id' => $package->id,

            'amount' => $package->price,

            'started_at' => now(),

            'ends_at' => now()
                ->addDays($package->duration_days),

        ]);

        $user->wallet->decrement(
            'balance',
            $package->price
        );

        return back()->with(
            'success',
            'Investment started successfully'
        );
    }
}
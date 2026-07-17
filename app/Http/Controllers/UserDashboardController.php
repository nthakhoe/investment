<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Investment;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $packages = Package::all();

        $investments = auth()
            ->user()
            ->investments()
            ->latest()
            ->get();

        $wallet = auth()->user()->wallet;

        return view('dashboard.index', compact(
            'packages',
            'investments',
            'wallet'
        ));
    }
}

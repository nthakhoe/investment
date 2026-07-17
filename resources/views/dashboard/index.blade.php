@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<div class="dashboard-container">

    <h2>Welcome back, {{ auth()->user()->name }}</h2>

    <div class="wallet-card">

        <h3>Wallet Balance</h3>

        <p class="balance">
            ${{ number_format($wallet->balance ?? 0, 2) }}
        </p>

    </div>


    <h3 class="section-title">Investment Packages</h3>

    <div class="packages">

        @foreach($packages as $package)

        <div class="package-card">

            <h4>{{ $package->name }}</h4>

            <p>Min: ${{ $package->price }}</p>

            <p>ROI: {{ $package->weekly_return_percent }}%</p>

            <p>Duration: {{ $package->duration_weeks }} Weeks</p>

            <form method="POST"
                  action="{{ route('invest.package', $package->id) }}">

                @csrf

                <button class="btn-invest">
                    Invest Now
                </button>

            </form>

        </div>

        @endforeach

    </div>


    <h3 class="section-title">My Investments</h3>

    <table class="investments-table">

        <thead>

            <tr>
                <th>Package</th>
                <th>Amount</th>
                <th>Profit</th>
                <th>Status</th>
            </tr>

        </thead>

        <tbody>

            @foreach($investments as $investment)

            <tr>

                <td>
                    {{ $investment->package->name }}
                </td>

                <td>
                    ${{ $investment->amount }}
                </td>

                <td>
                    ${{ $investment->profit }}
                </td>

                <td>
                    {{ ucfirst($investment->status) }}
                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection
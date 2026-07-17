@extends('layouts.app')

@section('content')

<h3>My Deposits</h3>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Method</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Date</th>
        </tr>
    </thead>

    <tbody>
        @foreach($deposits as $deposit)
            <tr>
                <td>{{ $deposit->id }}</td>
                <td>{{ ucfirst($deposit->type) }}</td>
                <td>${{ number_format($deposit->amount,2) }}</td>
                <td>{{ ucfirst($deposit->status) }}</td>
                <td>{{ $deposit->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $deposits->links() }}

@endsection
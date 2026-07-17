<?php

namespace App\Http\Controllers\Investor;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function index()
    {
        $deposits = Deposit::where('user_id', auth()->id())
            ->latest()
            ->paginate(10);

        return view('investor.deposits.index', compact('deposits'));
    }

    public function create()
    {
        return view('investor.deposits.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|in:crypto,bank',
            'amount' => 'required|numeric|min:1',

            // crypto
            'network' => 'nullable|string',
            'transaction_hash' => 'nullable|string',
            'sender_wallet' => 'nullable|string',

            // bank
            'bank_name' => 'nullable|string',
            'deposit_reference' => 'nullable|string',
            'proof_of_payment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120',
        ]);

        if ($request->hasFile('proof_of_payment')) {
            $validated['proof_of_payment'] = $request
                ->file('proof_of_payment')
                ->store('deposits', 'public');
        }

        $validated['user_id'] = auth()->id();
        $validated['status'] = 'pending';

        Deposit::create($validated);

        return redirect()
            ->route('investor.deposits.index')
            ->with('success', 'Deposit submitted successfully.');
    }
}
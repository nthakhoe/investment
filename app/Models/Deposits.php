<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deposits extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'amount',
        'currency',
        'status',
        'network',
        'transaction_hash',
        'sender_wallet',
        'bank_name',
        'deposit_reference',
        'proof_of_payment',
        'approved_by',
        'approved_at',
        'remarks',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    //

    protected $fillable = [
        'user_id',
        'package_id',
        'amount',
        'weeks_paid',
        'total_weeks',
        'next_payout_date',
        'completed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}

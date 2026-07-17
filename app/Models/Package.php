<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //

    protected $fillable = [
        'name',
        'price',
        'weekly_return_percent',
        'duration_weeks',
        'is_active',
    ];

    public function investments()
    {
        return $this->hasMany(Investment::class);
    }
}

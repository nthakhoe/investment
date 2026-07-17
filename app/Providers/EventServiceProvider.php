<?php

use App\Models\User;
use App\Models\Wallet;

User::created(function ($user) {

    Wallet::create([
        'user_id' => $user->id
    ]);

});
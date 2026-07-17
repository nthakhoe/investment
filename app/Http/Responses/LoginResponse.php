<?php

namespace App\Http\Responses;

use Filament\Http\Responses\Auth\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = auth()->user();

        return redirect()->intended(
            $user->role === 'Admin'
                ? '/admin'
                : '/dashboard'
        );
    }
}
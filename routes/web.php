<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\Investor\DepositController;

Route::middleware(['auth'])
    ->prefix('investor')
    ->name('investor.')
    ->group(function () {

        Route::get('/deposits', [DepositController::class, 'index'])
            ->name('deposits.index');

        Route::get('/deposits/create', [DepositController::class, 'create'])
            ->name('deposits.create');

        Route::post('/deposits', [DepositController::class, 'store'])
            ->name('deposits.store');
    });

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [UserDashboardController::class, 'index'])
        ->name('dashboard');

});

Route::get('/redirect-after-login', function () {

    $user = auth()->user();

    if ($user->role === 'Admin') {
        return redirect('/admin');
    }

    return redirect('/dashboard');

})->middleware('auth');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {

        if (auth()->user()->role === 'Admin') {
            return redirect('/admin');
        }

        return app(
            \App\Http\Controllers\UserDashboardController::class
        )->index();
    });

});

Route::post(
    '/invest/{package}',
    [InvestmentController::class, 'store']
)->name('invest.package');

Route::post('/logout', function () {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');
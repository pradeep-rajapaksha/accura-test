<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('auth.login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'authenticate'])->name('auth.authenticate')->middleware('guest');

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('members.index');
    })->name('app');

    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/members', App\Http\Controllers\MemberController::class);
    Route::resource('/ds-divisions', App\Http\Controllers\DsDivisionController::class);
});

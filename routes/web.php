<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

//Dashboard
Route::get('/', function () {
    return (Auth::user()) ? view('dashboard') : view('auth.login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// User
Route::resource('users', UserController::class)->middleware(['auth', 'verified']);
//Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Language Change
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ta'])) {
        Session::put('locale', $locale);
    }
    return Redirect::back();
})->name('lang.switch');

require __DIR__ . '/auth.php';

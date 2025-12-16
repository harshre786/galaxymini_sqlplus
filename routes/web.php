<?php

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout']);


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AuthController::class, 'dashboard']);

    Route::get('/change-password', function () {
        return view('change-password');
    })->name('password.change');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::post('/change-password', [AuthController::class, 'updatePassword'])
    ->name('password.update');


Route::middleware('auth')->group(function () {

    Route::get('/masters/{page}', function ($page) {
        return "<h1>$page Master Page</h1>";
    });

});

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PaymentController;

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


// Route::middleware('auth')->group(function () {

//     Route::get('/masters/{page}', function ($page) {
//         return "<h1>$page Master Page</h1>";
//     });

// });


Route::get('/masters/payment-master', [ItemController::class, 'index'])
        ->name('payment.index');


//  Route::get('/masters/item', [ItemController::class, 'index'])
//         ->name('masters.item');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');




// Route::get('/masters/payment-master', [PaymentController::class, 'index'])
//         ->name('payment.index');

// Route::prefix('masters')->group(function () {

//     Route::get('/payment-master', [PaymentController::class, 'index'])
//         ->name('payment.index');

//     Route::get('/payment-master/create', [PaymentController::class, 'create'])
//         ->name('payment.create');

//     Route::post('/payment-master/store', [PaymentController::class, 'store'])
//         ->name('payment.store');

//     Route::get('/payment-master/edit/{id}', [PaymentController::class, 'edit'])
//         ->name('payment.edit');

//     Route::post('/payment-master/update/{id}', [PaymentController::class, 'update'])
//         ->name('payment.update');
// });


use App\Http\Controllers\CustomerController;

Route::prefix('masters')->group(function () {

    Route::get('/customers', [CustomerController::class, 'index'])
        ->name('customer.index');

    Route::get('/customers/create', [CustomerController::class, 'create'])
        ->name('customer.create');

    Route::post('/customers/store', [CustomerController::class, 'store'])
        ->name('customer.store');
});



// Route::prefix('masters')->group(function () {
//     Route::get('/items', [ItemController::class, 'index'])->name('items.index');
//     Route::post('/items/store', [ItemController::class, 'store'])->name('items.store');
// });


Route::prefix('masters')->group(function () {
    Route::get('/item', [ItemController::class, 'index'])->name('masters.item');
});



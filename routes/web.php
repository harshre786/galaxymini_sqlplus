<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyUserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OfferCouponController;
use App\Http\Controllers\PaymentMasterController;
use App\Http\Controllers\OtherUsersController;
use App\Http\Controllers\TableGroupController;      
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TableMasterController;
use App\Http\Controllers\TaxSettingController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\KotGroupController;
use App\Http\Controllers\KotMessageController;
use App\Http\Controllers\FaqVideoController;


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



// Masters Routes
Route::get('/masters/license', [LicenseController::class, 'index'])
        ->name('masters.license');

Route::get('/masters/company', [CompanyController::class, 'index'])
    ->name('masters.company');

Route::get('/masters/company-user', [CompanyUserController::class, 'index'])
    ->name('masters.companyuser');

Route::get('/masters/customer', [CustomerController::class, 'index'])
    ->name('masters.customer');

Route::get('/masters/offer-coupon', [OfferCouponController::class, 'index'])
    ->name('masters.offercoupon');

Route::get('/masters/payment-master', [PaymentMasterController::class, 'index'])
    ->name('masters.paymentmaster');

Route::get('/masters/other-users', [OtherUsersController::class, 'index'])
    ->name('masters.otherusers');

Route::get('/masters/table-group', [TableGroupController::class, 'index'])
    ->name('masters.tablegroup');

Route::get('/masters/department', [DepartmentController::class, 'index'])
    ->name('masters.department');

Route::get('/masters/table-master', [TableMasterController::class, 'index'])
    ->name('masters.tablemaster');

Route::get('/masters/tax-setting', [TaxSettingController::class, 'index'])
    ->name('masters.taxsetting');

Route::get('/masters/unit', [UnitController::class, 'index'])
    ->name('masters.unit');

Route::get('/masters/kot-group', [KotGroupController::class, 'index'])
    ->name('masters.kotgroup');

Route::get('/masters/kot-message', [KotMessageController::class, 'index'])
    ->name('masters.kotmessage');

Route::get('/masters/item', [ItemController::class, 'index'])
    ->name('masters.item');

Route::get('/masters/faq-video', [FaqVideoController::class, 'index'])
    ->name('masters.faqvideo');
    


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
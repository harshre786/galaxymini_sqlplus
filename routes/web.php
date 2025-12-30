<?php

use Illuminate\Support\Facades\Route;

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

/*
|--------------------------------------------------------------------------
| Auth & Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/change-password', function () {
        return view('change-password');
    })->name('password.change');

    Route::post('/change-password', [AuthController::class, 'updatePassword'])
        ->name('password.update');
});

/*
|--------------------------------------------------------------------------
| Masters Routes
|--------------------------------------------------------------------------
*/

Route::get('/masters/license', [LicenseController::class, 'index'])->name('masters.license');
Route::delete('/masters/license/{id}', [LicenseController::class, 'destroy'])->name('license.delete');

// Route::get('/masters/company', [CompanyController::class, 'index'])->name('masters.company');

Route::get('/masters/company', [CompanyController::class, 'index'])
    ->name('masters.company');

Route::post('/masters/company/store', [CompanyController::class, 'store'])
    ->name('company.store');



Route::get('/masters/company-user', [CompanyUserController::class, 'index'])->name('masters.companyuser');

Route::get('/masters/company-user/create', [CompanyUserController::class, 'create'])
     ->name('companyuser.create');

Route::post('/masters/company-user/store', [CompanyUserController::class, 'store'])
     ->name('companyuser.store');


Route::get('/masters/customer', [CustomerController::class, 'index'])->name('masters.customer');

Route::get('/masters/offer-coupon', [OfferCouponController::class, 'index'])->name('masters.offercoupon');
Route::get('/masters/paymentMaster', [PaymentMasterController::class, 'index'])->name('masters.paymentMaster');


Route::get('/masters/other-users', [OtherUsersController::class, 'index'])->name('masters.otherusers');
Route::get('/masters/table-group', [TableGroupController::class, 'index'])->name('masters.tablegroup');

// Route::get('/masters/department', [DepartmentController::class, 'index'])->name('masters.department');

Route::get('/masters/department', [DepartmentController::class, 'index'])
    ->name('masters.department');

Route::post('/masters/department/store', [DepartmentController::class, 'store'])
    ->name('department.store');

// Route::post('/masters/department/update/{code}', [DepartmentController::class, 'update'])
//     ->name('department.update');

Route::get('/masters/table-master', [TableMasterController::class, 'index'])->name('masters.tablemaster');
Route::get('/masters/tax-setting', [TaxSettingController::class, 'index'])->name('masters.taxsetting');
// Route::get('/masters/unit', [UnitController::class, 'index'])->name('masters.unit');

Route::get('/masters/unit', [UnitController::class, 'index'])
    ->name('masters.unit');

Route::post('/masters/unit/store', [UnitController::class, 'store'])
    ->name('unit.store');

Route::get('/masters/kot-group', 
    [KotGroupController::class, 'index']
)->name('masters.kotgroup');

Route::post('/masters/kot-group/store',
    [KotGroupController::class, 'store']
)->name('kotgroup.store');



Route::get('/masters/kot-message', [KotMessageController::class, 'index'])->name('masters.kotmessage');

Route::prefix('masters')->group(function () {

    Route::get('/items', [ItemController::class, 'index'])
        ->name('items.index');

    Route::post('/items/store', [ItemController::class, 'store'])
        ->name('items.store');

});

Route::get('/masters/item', [ItemController::class, 'index'])->name('masters.item');
Route::post('/masters/item/store', [ItemController::class, 'store'])->name('items.store');

Route::get('/masters/faq-video', [FaqVideoController::class, 'index'])->name('masters.faqvideo');

/*
|--------------------------------------------------------------------------
| Customer CRUD (Prefix Based)
|--------------------------------------------------------------------------
*/

Route::prefix('masters')->group(function () {

    Route::get('/customers', [CustomerController::class, 'index'])
        ->name('customer.index');

    Route::get('/customers/create', [CustomerController::class, 'create'])
        ->name('customer.create');

    Route::post('/customers/store', [CustomerController::class, 'store'])
        ->name('customer.store');

    Route::post('/customers/edit', [CustomerController::class, 'edit'])
        ->name('customer.edit');

});


Route::get(
    '/masters/paymentMaster/create',
    [PaymentMasterController::class, 'create']
)->name('payment.create');

Route::post('/masters/paymentMaster/store',[PaymentMasterController::class, 'store'])->name('payment.store');

Route::get('/masters/paymentMaster/{id}/edit', [PaymentMasterController::class, 'edit'])
    ->name('payment.edit');


use App\Http\Controllers\FutureOrdersController;
use App\Http\Controllers\BillwiseController;
use App\Http\Controllers\ItemwiseController;
use App\Http\Controllers\DatewiseController;
use App\Http\Controllers\CancelledBillwiseController;
use App\Http\Controllers\NonChargeableBillController;
use App\Http\Controllers\ReportDepartmentController;
use App\Http\Controllers\CustomerwiseController;
use App\Http\Controllers\TotalSummaryController;

// Reports Routes


Route::get('/reports/billwise',[BillwiseController::class, 'index']
)->name('reports.billwise'); 


Route::get('/reports/itemwise', [ItemwiseController::class, 'index'])
    ->name('reports.itemwise'); 


Route::get('/reportd/datewise', [DatewiseController::class, 'index'])
    ->name('reports.datewise'); 


Route::get('/reports/cancelled-billwise', [CancelledBillwiseController::class, 'index'])
    ->name('reports.cancelled-billwise'); 


Route::get('/reports/nonchargeable-bill', [NonChargeableBillController::class, 'index'])
    ->name('reports.nonchargeable-bill'); 


Route::get('/reports/department', [ReportDepartmentController::class, 'index'])
    ->name('reports.department'); 


Route::get('/reports/customerwise', [CustomerwiseController::class, 'index'])
    ->name('reports.customerwise'); 


Route::get('/reports/total-summary', [TotalSummaryController::class, 'index'])
    ->name('reports.total-summary'); 



Route::get(
    '/reports/future-orders',
    [FutureOrdersController::class, 'index']
)->name('reports.future-orders');








use App\Http\Controllers\ActiveCompanyController;
use App\Http\Controllers\LicenseExpireController;
use App\Http\Controllers\LicenseActivatedController;
use App\Http\Controllers\ActiveUsersController;

Route::get('/masters/company/active-company', [ActiveCompanyController::class, 'index'])
    ->name('masters.company.active-company');

Route::get('/masters/license-expire', [LicenseExpireController::class, 'index'])
    ->name('masters.company.license-expire');
    
Route::get('/masters/license-activated', [LicenseActivatedController::class, 'index'])
    ->name('masters.company.license-activated');

Route::get('/masters/active-users', [ActiveUsersController::class, 'index'])
    ->name('masters.company.active-users'); 

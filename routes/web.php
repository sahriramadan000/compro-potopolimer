<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PwaController;
use App\Http\Controllers\Auth\LoginNewController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(route('home'));
});

Route::get('/home', function () {
    return view('homepage.index');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us.index');
})->name('about-us');

// Service
Route::get('/service', function () {
    return view('service.index');
})->name('service');

Route::get('/service-detail', function () {
    return view('service.detail');
})->name('service-detail');

Route::get('/service-photopolimer-plate', function () {
    return view('service.photopolimer-plate');
})->name('service-photopolimer-plate');

Route::get('/service-stripping-stopper', function () {
    return view('service.stripping-stopper');
})->name('service-stripping-stopper');

Route::get('/service-astralon', function () {
    return view('service.astralon');
})->name('service-astralon');

// News
Route::get('/news', function () {
    return view('news.index');
})->name('news');

Route::get('/news-detail', function () {
    return view('news.detail');
})->name('news-detail');

Route::get('/contact-us', function () {
    return view('contact-us.index');
})->name('contact-us');





































Route::post('/send-login', [LoginNewController::class, 'login'])->name('send-login');

// START FORGOT PASSWORD
Route::prefix('forgot-password')->name('forgot-password-')->group(function () {
    Route::get('/', [ForgotPasswordController::class, 'index'])->name('view');
    Route::post('/send-email', [ForgotPasswordController::class, 'sendEmail'])->name('send-email');
    Route::get('/reset-password', [ForgotPasswordController::class, 'reset'])->name('reset-password');
    Route::post('/proses-reset-password', [ForgotPasswordController::class, 'prosesReset'])->name('proses-reset-password');
});
// END FORGOT PASSWORD

Auth::routes();

// START ROLES
Route::prefix('roles')->name('roles-')->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::get('get-data', [RoleController::class, 'getRoles'])->name('get-data');
    Route::get('modal-add', [RoleController::class, 'getModalAdd'])->name('modal-add');
    Route::post('store', [RoleController::class, 'store'])->name('store');
    Route::get('modal-edit/{roleId}', [RoleController::class, 'getModalEdit'])->name('modal-edit');
    Route::put('update/{roleId}', [RoleController::class, 'update'])->name('update');
    Route::get('modal-delete/{roleId}', [RoleController::class, 'getModalDelete'])->name('modal-delete');
    Route::delete('delete/{roleId}', [RoleController::class, 'destroy'])->name('destroy');
    Route::post('update-permission', [RoleController::class, 'updatePermissionByID'])->name('update.permission');
    Route::post('update-all-permissions', [RoleController::class, 'updateAllPermissions'])->name('update.permission');
});

// END ROLES

Route::resources([
    // 'roles' => RoleController::class,
    'users' => UserController::class,
]);

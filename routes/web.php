<?php

use App\Http\Controllers\Auth\AboutUsController;
use App\Http\Controllers\Auth\AfterLoginController;
use App\Http\Controllers\Auth\Logincontroller;
use App\Http\Controllers\Auth\ContractUsController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\IndexController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// })->name('dashboard');

Route::get('index', [IndexController::class, 'showIndex'])->name('dashboard');

// Guest routes: only for users who are not logged in
// Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'login']);
// });

// Authenticated routes: only for logged-in users
Route::middleware('auth')->group(function () {
    
    Route::get('/admin/dashboard', [DashboardController::class, 'showDashboard'])
        ->name('admin.dashboard');
});


Route::get('about-us', [AboutUsController::class, 'showAboutUs'])->name('aboutus');
Route::get('contract-submit', [ContractUsController::class, 'showContractUs'])->name('contract.submit');
Route::post('contract-submit', [ContractUsController::class, 'store'])->name('contract.store');




Route::get('/register', [RegisterController::class, 'showRegister'])->name('register.page');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

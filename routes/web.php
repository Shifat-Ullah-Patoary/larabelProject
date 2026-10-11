<?php

use App\Http\Controllers\Auth\AboutUsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ContractUsController;
use App\Http\Controllers\Auth\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// })->name('dashboard');

Route::get('/', [IndexController::class, 'showIndex'])->name('dashboard');
// Route::get('/about-us', function () {
//     return view('aboutus');
// })->name('aboutus');

Route::get('about-us', [AboutUsController::class, 'showAboutUs'])->name('aboutus');
Route::get('contract-submit', [ContractUsController::class, 'showContractUs'])->name('contract.submit');
Route::post('contract-submit', [ContractUsController::class, 'store'])->name('contract.store');
// Route::get('/contract-submit', function () {
//     return view('contractus');
// })->name('contract.submit');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.page');
Route::post('/login', [AuthController::class, 'login']);

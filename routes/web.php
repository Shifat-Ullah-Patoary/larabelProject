<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('dashboard');
Route::get('/index2', function () {
    return view('index2');
})-> name ('dashboard.v2');



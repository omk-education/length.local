<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LenghtController;

Route::view('/', 'index')->name('index');

Route::post(
    '/',
    [LenghtController::class, 'lenght']
)->name('lenght');

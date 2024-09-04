<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::view('/', 'welcome');

Route::view('/referral', 'referral');

Route::view('/request', 'request');

Route::view('/admin', 'admin');

Route::view('/tracker', 'tracker');

// Auth
// Route::get('/referral', [SessionController::class, 'create']);



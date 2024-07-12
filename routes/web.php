<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/referral', 'referral');

Route::view('/request', 'request');

Route::view('/admin', 'admin');

Route::view('/tracker', 'tracker');



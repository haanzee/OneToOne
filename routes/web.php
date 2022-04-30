<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileController;



Route::get('/', [CustomerController::class, 'index']);

Route::get('/Add', function () {
    return view('addData');  
});

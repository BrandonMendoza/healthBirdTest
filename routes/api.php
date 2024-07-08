<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ZipcodeController;

Route::get('/zipcodes',                  [ZipcodeController::Class, 'index']);
Route::get('/zipcodes/{zipcode}',        [ZipcodeController::Class, 'show']);
Route::post('/zipcodes',                 [ZipcodeController::Class, 'store']);


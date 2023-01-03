<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/session/get',[SessionController::class,'getSessionData']);
Route::get('/session/store',[SessionController::class,'storeSessionData']);
Route::get('/session/destroy',[SessionController::class,'destroySessionData']);
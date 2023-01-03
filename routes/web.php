<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FromController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form-create',[FromController::class,'formcreate']);
Route::post('/form-submit',[FromController::class,'formsubmit'])->name('form-submit');

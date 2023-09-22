<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;


Route::get('/', function () {
    return view('app');
});
Route::get('/api/index',[AppController::class,'index']);
Route::post('/api/index',[AppController::class,'store']);

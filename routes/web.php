<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


Route::get('/',[CategoryController::class,'index']);
Route::resource('categories', CategoryController::class);


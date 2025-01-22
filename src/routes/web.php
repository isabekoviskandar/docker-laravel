<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class,'index']);


Route::resource('categories', CategoryController::class);


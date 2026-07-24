<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

Route::get('/',HomeController::class,'index');
Route::get('/about', AboutController::class);
Route::get('/article/{id}', AboutController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;


Route::get('/', [CompanyController::class, 'home']);


Route::prefix('products')->group(function(){

    Route::get('/', [CompanyController::class, 'products']);

    Route::get('/category/{category}', 
    [CompanyController::class, 'productCategory']);

});


Route::prefix('news')->group(function(){

    Route::get('/', [CompanyController::class, 'news']);

    Route::get('/{slug}', 
    [CompanyController::class, 'detailNews']);

});


Route::prefix('program')->group(function(){

    Route::get('/', [CompanyController::class, 'program']);

    Route::get('/{program}', 
    [CompanyController::class, 'programDetail']);

});


Route::get('/about-us', 
[CompanyController::class, 'about']);
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return 'Bobby Bernarddi Widjayanto';
});

Route::get('/articles/{id}', function ($id) {
    return "Hi! Selamat Datang di Website Laravel" . $id;
});
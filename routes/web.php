<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('teste');
});

Route::get('/teste', function () {
    return view('teste2');
});
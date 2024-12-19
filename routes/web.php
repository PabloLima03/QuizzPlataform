<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/costumer-quizz', function () {
    return view('costumer');
});

Route::get('/quizzes', function () {
    return view('quizzes');
});
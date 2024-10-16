<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\PostResource;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/types', function () {
    return view('types');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/result', function () {
    return view('result');
});

Route::get('/about', function () {
    return view('about');
});

Route::post('/result', [QuizController::class, 'postForm'])->name('submit.quiz');
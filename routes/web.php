<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\QuizController;

Route::get('/quiz', [QuizController::class, 'showQuiz'])->name('quiz.show');

Route::post('/quiz', [QuizController::class, 'evaluateQuiz'])->name('quiz.submit');

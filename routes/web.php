<?php

use Illuminate\Support\Facades\Route;
use Magan\Feedback\Http\Controllers\FeedbackController;

Route::middleware(config('feedback.route.middleware'))
    ->prefix(config('feedback.route.prefix'))
    ->group(function () {
        Route::view('/', 'feedback::index')->name('feedback.index');
        Route::post('/', [FeedbackController::class, 'sendEmail'])->name('feedback.send');
        Route::get('/test', function () {
            return 'test';
        })->name('feedback.test');

    });

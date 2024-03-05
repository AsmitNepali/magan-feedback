<?php

use Illuminate\Support\Facades\Route;
use Magan\Feedback\Http\Controllers\FeedbackController;

Route::middleware(['guest', 'web'])->group(function () {
    Route::view('/feedback', 'feedback::index')->name('feedback.index');
    Route::post('/feedback', [FeedbackController::class, 'sendEmail'])->name('feedback.send');
});

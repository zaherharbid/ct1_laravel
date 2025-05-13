<?php

use App\Http\Controllers\TeacherController;

use Illuminate\Support\Facades\Route;

Route::prefix('teacher')->name('teacher.')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('index');
    Route::get('/marks', [TeacherController::class, 'marks'])->name('marks');
    Route::get('/avg', [TeacherController::class, 'avg'])->name('avg');
});

<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::prefix('student')->middleware('auth')->name('student.')->group(function () {
//     Route::get('', function () {
//         return 'Student Page';
//     })->name('.index');
//     Route::get('/marks', function () {
//         return ('Student Marks Page');
//     })->name('.marks');
//     Route::get('/avg', function () {
//         return 'Student AVG Page';
//     })->name('.avg');
// });
Route::prefix('student')->name('student.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/marks', [StudentController::class, 'marks'])->name('marks');
    Route::get('/avg', [StudentController::class, 'avg'])->name('avg');
});

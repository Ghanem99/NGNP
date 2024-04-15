<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExerciseUserController;

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/exercise', [ExerciseController::class, 'index'])->name('exercise');
    Route::post('/record-exercise', [ExerciseController::class, 'storeReps'])->name('record-exercise.store');

    Route::get('analytics', [DashboardController::class, 'index'])->name('analytics');
    
});

require __DIR__.'/auth.php';

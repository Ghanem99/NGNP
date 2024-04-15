<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ExerciseUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/exercise', function () {
        return view('exercise');
    })->middleware(['auth', 'verified'])->name('exercise');

    Route::get('/exercise', [ExerciseController::class, 'index'])->name('exercise');
    Route::post('/record-exercise', [ExerciseController::class, 'storeReps'])->name('record-exercise.store');
    
});

require __DIR__.'/auth.php';

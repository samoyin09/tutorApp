<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/tutor/dashboard', [TutorController::class, 'dashboard'])->name('tutor.dashboard');
Route::get('/tutor/performance', [TutorController::class, 'performance'])->name('tutor.performance');
Route::get('/tutor/prediction', [TutorController::class, 'prediction'])->name('tutor.prediction');
Route::get('/tutor/students', [TutorController::class, 'approvedStudents'])->name('tutor.approvedStudents');
Route::get('/tutor/messages', [TutorController::class, 'messages'])->name('tutor.messages');
Route::get('/tutor/profile', [TutorController::class, 'profile'])->name('tutor.profile');


require __DIR__.'/auth.php';

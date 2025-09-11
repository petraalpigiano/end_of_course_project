<?php

use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\EpController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\SingleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::resource('albums', AlbumController::class);
Route::resource('singles', SingleController::class);
Route::resource('eps', EpController::class);
Route::resource('genres', GenreController::class);

require __DIR__ . '/auth.php';

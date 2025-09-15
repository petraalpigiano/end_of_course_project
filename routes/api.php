<?php

use App\Http\Controllers\Api\MusicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// ALBUMS
Route::get('albums', [MusicController::class, 'indexAlbums']);
Route::get('albums/{id}', [MusicController::class, 'showAlbums']);

// EPS

Route::get('eps', [MusicController::class, 'indexEps']);
Route::get('eps/{id}', [MusicController::class, 'showEps']);

// SINGLES
Route::get('singles', [MusicController::class, 'indexSingles']);
Route::get('singles/{id}', [MusicController::class, 'showSingles']);

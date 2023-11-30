<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\AlbumController::class, 'index'])->name('index');

Route::get('albums/{album}/export', [\App\Http\Controllers\AlbumController::class, 'export'])->name('albums.export');

Route::resource('albums', \App\Http\Controllers\AlbumController::class);
Route::resource('genres', \App\Http\Controllers\GenreController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'home'])->name('home');
Route::get('/articoli', [BlogController::class, 'index'])->name('articoli.index');
Route::get('/articoli/{slug}', [BlogController::class, 'show'])->name('articoli.show');

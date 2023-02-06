<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/saint/show/{id}', [MainController::class, 'show'])->name('show');
Route::get('/saint/destroy/{id}', [MainController::class, 'saintDestroy'])->name('saint.destroy');
Route::get('/saint/create/', [MainController::class, 'saintCreate'])->name('saint.create');
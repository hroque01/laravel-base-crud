<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']);
Route::get('/saint/{id}', [MainController::class, 'show']);
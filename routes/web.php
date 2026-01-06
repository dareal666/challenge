<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokesController;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

Route::middleware(['auth:sanctum'])
    ->get('/jokes', [JokesController::class, 'index'])
    ->name('jokes.index');

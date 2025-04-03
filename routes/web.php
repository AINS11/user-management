<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::controller(AuthController::class)
    ->withoutMiddleware([VerifyCsrfToken::class])
    ->group(function () {
        Route::post('/register', 'register');
        Route::post('/login', 'login');
    });

    Route::middleware('auth:sanctum')
    ->withoutMiddleware([VerifyCsrfToken::class])
    ->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::apiResource('/users', UserController::class);
    });

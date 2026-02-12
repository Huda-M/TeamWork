<?php

use App\Http\Controllers\ProgrammerController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/{id}', [UserController::class, 'show']);
        Route::post('/', [UserController::class, 'store']);
        Route::put('/{id}', [UserController::class, 'update']);
        Route::delete('/{id}', [UserController::class, 'destroy']);
    });

    Route::prefix('programmers')->group(function () {
        Route::get('/', [ProgrammerController::class, 'index']);
        Route::get('/{id}', [ProgrammerController::class, 'show']);
        Route::post('/', [ProgrammerController::class, 'store']);
        Route::put('/{id}', [ProgrammerController::class, 'update']);
        Route::delete('/{id}', [ProgrammerController::class, 'destroy']);
    });


});

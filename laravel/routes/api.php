<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Middleware\RequestCounter;

// User Routes with Middleware
Route::middleware(RequestCounter::class)->group(function () {
    Route::get('users', [UserController::class, 'index']);         
    Route::post('users/create', [UserController::class, 'store']);      
    Route::get('users/{id}', [UserController::class, 'show']);         
    Route::post('users/{id}/update', [UserController::class, 'update']); 
    Route::post('users/{id}/delete', [UserController::class, 'destroy']);
});


Route::middleware(RequestCounter::class)->group(function () {
    Route::get('projects', [ProjectController::class, 'index']);            
    Route::post('projects/create', [ProjectController::class, 'store']);   
    Route::get('projects/{id}', [ProjectController::class, 'show']);         
    Route::post('projects/{id}/update', [ProjectController::class, 'update']);
    Route::post('projects/{id}/delete', [ProjectController::class, 'destroy']);
});


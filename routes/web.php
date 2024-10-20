<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BoardController::class, 'index']);
Route::get('/boards/{board}', [BoardController::class, 'show']);

Route::post('/task/create', [TaskController::class, 'create']);
Route::post('/task/show/{task}', [TaskController::class, 'show']);
Route::post('/task/update/{task}', [TaskController::class, 'update']);


// Route::post('/panel/show/{task}', [PanelController::class, 'show']);
<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\TimeRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AgentController::class, 'show']);

Route::post('/create/agent', [AgentController::class, 'create'])->whereAlpha('name');
Route::get('/create/comming/{agent}', [TimeRegisterController::class, 'createComming']);
Route::get('/create/leaving/{agent}', [TimeRegisterController::class, 'createLeaving']);

Route::get('/delete/agent/{agent}', [AgentController::class, 'delete']);

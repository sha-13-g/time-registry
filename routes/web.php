<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\TimeRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AgentController::class, 'show']);

Route::post('/create/agent', [AgentController::class, 'create'])->whereAlpha('name');
Route::get('/create/comming/{id}', [TimeRegisterController::class, 'createComming']);
Route::get('/create/leaving/{id}', [TimeRegisterController::class, 'createLeaving']);

Route::get('/delete/agent/{id}', [AgentController::class, 'delete']);

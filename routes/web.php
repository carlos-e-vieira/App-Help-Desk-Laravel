<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/chamados/index', [ChamadoController::class, 'index']);
Route::get('/chamados/create', [ChamadoController::class, 'create']);
Route::post('/chamados', [ChamadoController::class, 'store']);
Route::get('/chamados/{id}', [ChamadoController::class, 'show']);
Route::delete('/chamados/{id}', [ChamadoController::class, 'destroy']);
Route::get('/chamados/edit/{id}',[ChamadoController::class, 'edit']);
Route::put('chamados/update/{id}', [ChamadoController::class, 'update']);
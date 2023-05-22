<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CEPController;

Route::post('clients', [ClientController::class, '__invoke']);
Route::get('clients', [ClientController::class, '__invoke']);
Route::get('clients/{id}', [ClientController::class, '__invoke']);
Route::patch('clients/{id}', [ClientController::class, '__invoke']);

Route::get('cep/{cep}', [CEPController::class, '__invoke']);

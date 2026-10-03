<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', [appController::class, 'index']);
Route::get('/add-user', [appController::class, 'addUserForm']);
Route::post('/add-user', [appController::class, 'addUser']);

Route::get('/delete/{id}', [appController::class, 'delete']);

Route::get('/edit/{id}', [appController::class, 'edit']);
Route::post('/edit', [appController::class, 'update']);

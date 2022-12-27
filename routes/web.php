<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\upController;


Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'index']);

Route::get('/insertPaciente', [InsertController::class, 'index']);
Route::post('/insertPaciente', [InsertController::class, 'index']);

Route::get('/deletePaciente', [deleteController::class, 'index']);
Route::post('/deletePaciente', [deleteController::class, 'index']);

Route::get('/updatePaciente', [updateController::class, 'index']);
Route::post('/updatePaciente', [updateController::class, 'index']);

Route::get('/updateP', [upController::class, 'index']);
Route::post('/updateP', [upController::class, 'index']);
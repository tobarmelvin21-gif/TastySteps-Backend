<?php

use App\Http\Controllers\Api\RecetaController;
use Illuminate\Support\Facades\Route;

Route::get('/recetas', [RecetaController::class, 'index']);
Route::get('/recetas/{id}', [RecetaController::class, 'show']);
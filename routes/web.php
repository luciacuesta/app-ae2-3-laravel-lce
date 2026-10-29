<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroLCEController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [LibroLCEController::class, 'index']);
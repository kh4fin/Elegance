<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [HomeController::class, 'getProducts']);
Route::get('/products/{id}', [HomeController::class, 'getProductById']);
Route::post('/contact', [HomeController::class, 'contact']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'index']);
Route::get('/book-catalog', [FrontController::class, 'bookCatalog']);
Route::get('/book-catalog/{slug}', [FrontController::class, 'bookDetail']);
Route::get('/about-us', [FrontController::class, 'aboutUs']);

// Route::get('/', function () {
//     return view('welcome');
// });
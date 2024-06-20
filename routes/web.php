<!-- < ?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\ProductController;

// Route::get('/products', [ProductController::class, 'index']);

// Route::get('/', [ProductController::class, 'index']);
// Route::get('/products', [ProductController::class, 'index']);

<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);

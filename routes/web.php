<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('products');
// });

Route::get('/', [ProductController::class, 'products'])->name('products');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index']);

Route::group(['middleware' => ['web']], function() {
    Route::redirect('/', '/login');
    Route::redirect('/dashboard', '/login');
    // Route::has('register');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::redirect('/', '/dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('products/gallery/{id}', [ProductController::class, 'gallery'])->name('products.gallery');

    Route::get('transactions/{id}/set-status', [TransactionController::class, 'setStatus'])->name('transactions.status');
    
    Route::resources([
        'products' => ProductController::class,
        'product-galleries' => ProductGalleryController::class,
        'transactions' => TransactionController::class
    ]);
});

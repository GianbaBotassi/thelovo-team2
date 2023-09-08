<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// ------------------------ ROTTE PER BLADE RESTAURANTS ---------------------

Route::get('/', [RestaurantController::class, 'indexBE'])->name('home');

Route::get('/show-restaurant/{id}', [RestaurantController::class, 'showBE'])->name('restaurant.restaurant');

// Rotta per creazione ristorante
Route::get('/create', [RestaurantController::class, 'createBE'])->name('create-restaurant');
Route::post('/store-restaurant', [RestaurantController::class, 'storeBE'])->name('store-restaurant');

// ROTTE PER I PRODOTTI
// Route index
Route::get('/index-product', [ProductController::class, 'indexBE'])->name('products.index');

// Route show
Route::get('/show-product/{id}', [ProductController::class, 'showBE'])->middleware(['auth', 'verified'])->name('products.show');


// Route create and store
Route::get('/create-product', [ProductController::class, 'createBE'])->middleware(['auth', 'verified'])->name('products.create');
Route::post('/products', [ProductController::class, 'storeBE'])->middleware(['auth', 'verified'])->name('products.store');

// Route edit and update
Route::get('/edit-product/{id}', [ProductController::class, 'editBE'])->middleware(['auth', 'verified'])->name('products.edit');
Route::put('/update-product/{id}', [ProductController::class, 'updateBE'])->middleware(['auth', 'verified'])->name('products.update');

// Route destroy
Route::delete('/delete-product/{id}', [ProductController::class, 'destroyBE'])->middleware(['auth', 'verified'])->name('products.delete');

// ROTTE PER GLI ORDERS
// route index
Route::get('/index-order/{id}', [OrderController::class, 'indexBE'])->name('orders.index');
// route show
Route::get('/show-order/{id}', [OrderController::class, 'showBE'])->name('orders.show');

// Route create and store
// Route::get('/create-order', [OrderController::class, 'createBE'])->middleware(['auth', 'verified'])->name('orders.create');
// Route::post('/orders', [OrderController::class, 'storeBE'])->middleware(['auth', 'verified'])->name('orders.store');

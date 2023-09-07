<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\RestaurantController;
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

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/', [RestaurantController::class, 'index'])->name('welcome');
Route::get('users', [UserController::class, 'index']);

Route::get('/show-restaurant/{id}', [RestaurantController::class, 'show'])->name('show-restaurant');

// Rotta per creazione ristorante
Route::get('/create', [RestaurantController::class, 'create'])->name('create-restaurant');

Route::post('/store-restaurant', [RestaurantController::class, 'store'])->name('store-restaurant');



//Route api CRUD restaurants create and store
// DA VEDERE COME FARLE FUNZIONARE

Route::post('/user-create', [UserController::class, 'store']);

Route::post('/user-login', [AuthenticatedSessionController::class, 'store']);

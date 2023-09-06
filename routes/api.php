<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestaurantController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route api CRUD restaurants idex and show ( with id )
Route::get('restaurants', [RestaurantController::class, 'index']);

Route::get('/show-restaurant/{id}', [RestaurantController::class, 'show'])->name('show-restaurant');

//Route api CRUD restaurants create and store
Route::get('/create', [RestaurantController::class, 'create']);
Route::post('/restaurants-create', [RestaurantController::class, 'store']);

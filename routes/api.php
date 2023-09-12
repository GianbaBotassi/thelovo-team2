<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProductController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TypologyController;

use App\http\Controllers\Auth\AuthenticatedSessionController;
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
//Route api CRUD restaurants create and store
// DA VEDERE COME FARLE FUNZIONARE
// Route::get('/create/{id}', [RestaurantController::class, 'create']);
// Route::post('/restaurants-create/{id}', [RestaurantController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route api CRUD restaurants idex and show ( with id )
Route::get('restaurant', [RestaurantController::class, 'restTypologies']);

Route::get('/show-restaurant/{id}', [RestaurantController::class, 'showFE'])->name('show-restaurant');


// route api products

// Route::get('products', [ProductController::class, 'indexFE']);


// route api tipologies

Route::get('typologies', [TypologyController::class, 'indexFE']);

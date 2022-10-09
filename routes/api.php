<?php

use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\CountryController;
use Illuminate\Support\Facades\Route;

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

// route countries CRUD
Route::get('countries', [CountryController::class, 'index']);
Route::post('store-country', [CountryController::class, 'store']);
Route::get('show-country/{id}', [CountryController::class, 'show']);
Route::post('update-country/{id}', [CountryController::class, 'update']);
Route::delete('delete-country/{id}', [CountryController::class, 'destroy']);
// End route countries CRUD

// route city CRUD
Route::get('cities', [CityController::class, 'index']);
Route::post('store-city', [CityController::class, 'store']);
Route::get('show-city/{id}', [CityController::class, 'show']);
Route::post('update-city/{id}', [CityController::class, 'update']);
Route::delete('delete-city/{id}', [CityController::class, 'destroy']);
// End route city CRUD

Route::get('country-cities/{id}' , [CountryController::class, 'citybycountry'] );

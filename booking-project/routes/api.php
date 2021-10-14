<?php

use App\Models\Bookable;
use Illuminate\Http\Request;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// a resource controller (this would have all CRUD methods on it: )
// Route::apiResource('bookables', 'Api\BookableController')->only(['index', 'show']);

Route::get('bookables', 'App\Http\Controllers\Api\PropertyController@index');
Route::get('bookables/{id}', 'App\Http\Controllers\Api\PropertyController@show');
Route::get('bookables/{id}/availability', 'App\Http\Controllers\Api\BookableAvailabilityController')->name('bookables.availability.show');

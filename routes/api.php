<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ListTypeController;
use App\Http\Controllers\API\ListElementController;
use App\Http\Controllers\API\ThirdPartieController;

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

Route::prefix('list-type')->group(function () {
    Route::get('/',[ ListTypeController::class, 'getAll']);
    Route::post('/',[ ListTypeController::class, 'create']);
    Route::delete('/{id}',[ ListTypeController::class, 'delete']);
    Route::get('/{id}',[ ListTypeController::class, 'get']);
    Route::put('/{id}',[ ListTypeController::class, 'update']);
});

Route::prefix('list-element')->group(function () {
    Route::get('/',[ ListElementController::class, 'getAll']);
    Route::post('/',[ ListElementController::class, 'create']);
    Route::delete('/{id}',[ ListElementController::class, 'delete']);
    Route::get('/{id}',[ ListElementController::class, 'get']);
    Route::put('/{id}',[ ListElementController::class, 'update']);
});

Route::prefix('thirdpartie')->group(function () {
    Route::get('/',[ ThirdPartieController::class, 'getAll']);
    Route::post('/',[ ThirdPartieController::class, 'create']);
    Route::delete('/{id}',[ ThirdPartieController::class, 'delete']);
    Route::get('/{id}',[ ThirdPartieController::class, 'get']);
    Route::put('/{id}',[ ThirdPartieController::class, 'update']);
});

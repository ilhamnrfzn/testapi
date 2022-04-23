<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;

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

Route::get('province', [ProvinceController::class, 'index']);
// Route::post('provinces', [ProvinceController::class, 'indexa']);
Route::post('province', [ProvinceController::class, 'create']);
Route::put('province', [ProvinceController::class, 'update']);
Route::delete('province', [ProvinceController::class, 'delete']);

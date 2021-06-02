<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;





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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [PassportAuthController::class, 'login']);
Route::post('register', [PassportAuthController::class, 'register']);

// Auth::routes();



Route::middleware('auth:api')->group(function(){
    Route::resource('posts', PostController::class);
    Route::resource('servers', ServersController::class);
    Route::resource('servers2', ServersAPIController::class);
});
// Route::apiResource('servers', ServersController::class)->middleware('auth:api');

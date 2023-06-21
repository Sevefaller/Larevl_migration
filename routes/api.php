<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
Route::get('/tasks', [TestController::class, 'index']);
Route::post('/tasks', [TestController::class, 'store']);
Route::get('/tasks/{id}', [TestController::class, 'show']);
Route::put('/tasks/{id}', [TestController::class, 'update']);
Route::delete('/tasks/{id}', [TestController::class, 'destroy']);

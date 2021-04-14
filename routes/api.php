<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/user", [UserController::class, 'index']);
Route::get("/user_information/{id}", [UserController::class, 'userInformation']);
Route::post("/user", [UserController::class, 'store']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id]', [UserController::class, 'destroy']);

Route::get('/post', [PostController::class, 'index']);
Route::post('/post', [PostController::class, 'store']);


Route::post("/login", [UserController::class, 'login']);

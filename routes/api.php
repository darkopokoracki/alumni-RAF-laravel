<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAPIController;

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

Route::get('/test', function(Request $request) {
    return $request;
});

Route::get('/students', [StudentAPIController::class, 'list']);

Route::get('/students/page/{page}', [StudentAPIController::class, 'page']);

Route::get('/students/search/{search}', [StudentAPIController::class, 'search']);

Route::get('/student/{id}', [StudentAPIController::class, 'student']);
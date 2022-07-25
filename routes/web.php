<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [StudentController::class, 'home']);
Route::get('/home', [StudentController::class, 'home']);
Route::get('/pocetna', [StudentController::class, 'home']);

Route::get('/students/{page?}', [StudentController::class, 'page']);

Route::get('/students/search/{search?}', [StudentController::class, 'search']);
// Ideja je dati opcioni parametar i ako ga navedem ona mi odmah traazi rezultat
// Ako izostavim parametar onda mi se ucita stranica pretrazi sa formom.

Route::get('/student/{id}', [StudentController::class, 'student']);

Route::get('/nova_ruta', [StudentController::class, 'otvori_novu_rutu']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriticoController;
use App\Http\Controllers\OtrosController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\RestauranteController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/criticos_view', [CriticoController::class, "getListCritico"]);

Route::get('/criticos', [CriticoController::class, "getCriticos"]);

Route::get('/critico_info_view/{id}', [CriticoController::class, "getCriticoInfoView"]);

Route::get('/criticos/{id}', [CriticoController::class, "getCrticoById"]);

Route::get('/perfiles', [CriticoController::class, "getPerfiles"]);

Route::get('/', [OtrosController::class, "getInicio"]);
Route::get('/register', [OtrosController::class, "getRegisterForm"]);

Route::get('/articulos', [ArticuloController::class, "getArticulos"]);

Route::get('/articulos/{id}', [ArticuloController::class, "getArticulosByCriticoID"]);

Route::get('/restaurantes/{id}', [RestauranteController::class, "getRestauranteByID"]);






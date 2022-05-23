<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriticoController;

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

Route::get('/perfil', [CriticoController::class, "getPerfil"]);






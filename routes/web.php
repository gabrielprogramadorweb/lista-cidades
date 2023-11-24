<?php
use App\Http\Controllers\API\DadoController2;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DadoController;


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

Route::get('/', [DadoController::class, 'index']);

Route::get('/cidades', [DadoController::class, 'getCidades']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitioController;

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

Route::get('/', [SitioController::class, 'landingpage']);

Route::get('/contacto/{codigo?}', [SitioController::class, 'contacto']);
Route::get('/contacto', [SitioController::class, 'contacto']);
Route::post('/recibe-form-contacto', [SitioController::class, 'recibeFormContacto']);


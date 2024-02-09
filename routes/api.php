<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController; 
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;
use App\Mail\EnviarCorreo2;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('enviarCorreo', [FormularioController::class, 'enviarCorreo']);
// Route::post('enviarCorreo2', [FormularioController2::class, 'enviarCorreo2']);


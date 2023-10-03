<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EventoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio/inicio');
})->name('inicio');

Route::get('/contacto', function()
{
return view('contacto/contacto');
});

Route::get('/comprar_entradas', function()
{
return view('entradas/entradas');
});

Route::get('/eventos', function()
{
return view('eventos/eventos');
});


Route::get('/nuevo_evento', function()
{
return view('eventos/nuevo_evento');
});

Route::get('/login', function()
{
return view('usuarios/login');
});


Route::get('/registro', function () {
    return view('usuarios/registro');
})->name('registro');

Route::get('/eventos_detalles',function(){
    return view('eventos/e_detalles');
})->name('detalles');



Route::get('eventos',[EventoController:: class, 'index']);
Route::get('eventos/{id}', [EventoController:: class, 'show']);























Route::get('/registro', [App\Http\Controllers\RegisterController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registro', [RegisterController::class, 'registro']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

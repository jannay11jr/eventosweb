<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController as ControllersRegisterController;

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


Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');


Route::get('/comprar_entradas', [ComprasController::class, 'index'])->name('comprar_entradas')->middleware('auth');


Route::get('/eventos', function()
{
return view('eventos/eventos');
});


Route::get('/nuevo_evento', function()
{
return view('eventos/nuevo_evento');
});




Route::post('login', [LoginController::class, 'login']);
Route::get('login', [LoginController::class, 'loginForm'])->name('login.login');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('registro', [App\Http\Controllers\RegisterController::class, 'showRegistrationForm'])->name('registro');
Route::post('registro', [RegisterController::class, 'registro']);
Route::post('registro', [RegisterController::class, 'store'])->name('registro.store');






Route::get('/eventos_detalles',function(){
    return view('eventos/e_detalles');
})->name('detalles');


Route::get('eventos/filtrar', [EventoController:: class, 'filtrar'])->name('eventos.filtrar');
Route::get('eventos',[EventoController:: class, 'index']) ->name('eventos.index');
Route::get('eventos/{id}', [EventoController:: class, 'show'])
->name('eventos.show');


Route::delete('eventos/{id}', [EventoController:: class, 'destroy'])
->name('eventos.destroy')->middleware('middleRol:1');
Route::put('eventos/{id}', [EventoController:: class, 'update'])->name('eventos.update')->middleware('middleRol:1');


Route::get('eventos/{id}/edit', [EventoController::class, 'edit'])->name('eventos.edit')->middleware('middleRol:1');
Route::post('eventos', [EventoController:: class, 'store'])->name('eventos.store');



Route::get('/nuevo_evento', [GeneroController::class, 'index'])->name('nuevo_evento')->middleware('middleRol:1');








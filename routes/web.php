<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovTransferencia;
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
    return view('welcome',);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/actualizarPerfil', [App\Http\Controllers\HomeController::class, 'actualizarPerfil'])->name('actualizarPerfil');
Route::post('/guardarPerfil', [App\Http\Controllers\HomeController::class, 'guardarPerfil'])->name('guardarPerfil');



// Route::get('/transferencia', [App\Http\Controllers\MovTransferencia::class, 'transferencia'])->name('transferencia');
// Route::get('/transferencia', 'App\Http\Controllers\MovTransferencia@index');
// Route::resource('transferencia', MovTransferencia:   :class);
 
Route::resource('mov-transferencia', App\Http\Controllers\MovTransferenciaController::class);

// Route::get('/mov-transferencia', function () {
//     return view('mov-transferencia.index', [App\Http\Controllers\MovTransferenciaController::class]);
// });

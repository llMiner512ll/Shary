<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ColorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/productos', [ProductosController::class,'index'])->name('productos');

Route::get('/detallesproducto', [ProductosController::class,'index'])->name('detallesproducto');
Route::get('/detallesproducto/{}', [ProductosController::class,'show']);

Route::get('/nuevoproducto', [ProductosController::class,'nuevo'])->name('nuevo');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculosController;

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
Route::get('/fibonacci', function () {
    return view('fibonacci');
});

Route::post('calcularFibonacci', [CalculosController::class, 'fibonacci'])->name('fibonacci');

Route::get('/cadenas', function () {
    return view('cadenas');
});

Route::post('calcularCadenas', [CalculosController::class, 'cadenas'])->name('cadenas');

Route::get('/caracter', function(){
    return view('caracter');
});

Route::post('calcularCaracter', [CalculosController::class, 'caracter'])->name('caracter');

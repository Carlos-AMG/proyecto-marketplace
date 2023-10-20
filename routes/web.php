<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ProductoController;
use App\Models\Departamento;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// Solicitar que el usuario inicie sesion para las rutas
// Route::middleware('auth')->group(function(){
//     Route::resource('producto', ProductoController::class);
//     Route::resource('departamento',Departamento::class);
// });
// Route::resource('producto', ProductoController::class)->middleware('auth');
// Route::resource('departamento',Departamento::class)->middleware('auth');

Route::resource('producto', ProductoController::class);
Route::resource('departamento',DepartamentoController::class);

Route::get('prueba',function(){
    return view('prueba');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

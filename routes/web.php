<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\InformacionController;
use App\Models\Factura;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Solicitar que el usuario inicie sesion para las rutas
// Route::middleware('auth')->group(function(){
//     Route::resource('producto', ProductoController::class);
//     Route::resource('departamento',Departamento::class);
// });
// Route::resource('producto', ProductoController::class)->middleware('auth');
// Route::resource('departamento',Departamento::class)->middleware('auth');

Route::resource('producto', ProductoController::class);
Route::resource('departamento',DepartamentoController::class)->middleware('auth.admin');
Route::resource('empleado',EmpleadoController::class)->middleware('auth.admin');
Route::resource('factura',FacturaController::class);
Route::resource('informacion',InformacionController::class);

Route::get('/informacion', [InformacionController::class,'index']);
Route::get('/contactUs',[InformacionController::class,'contactUs']);
Route::get('/aboutUs',[InformacionController::class,'aboutUs']);

Route::get('prueba',function(){
    return view('prueba');
});

Route::get('/admin',[AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

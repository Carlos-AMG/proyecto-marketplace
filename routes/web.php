<?php

use App\Http\Controllers\PersonaController;
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

// Route::get(){};

// Persona endpoints
Route::resource('persona', PersonaController::class);
Route::get('/login', [PersonaController::class, 'showLogin'])->name('persona.showLogin');
Route::post('/login', [PersonaController::class, 'login'])->name('persona.login');
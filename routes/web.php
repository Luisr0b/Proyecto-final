<?php

use App\Http\Controllers\PaginasController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\TicketController;
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
    return view('index');
});

Route::get('/canciones/{id?}', [PaginasController::class, 'canciones']);
Route::get('/contacto', [PaginasController::class, 'contacto']);
Route::post('/contacto', [PaginasController::class, 'postContacto']);

Route::resource('/empleado', EmpleadoController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('/ticket', TicketController::class);
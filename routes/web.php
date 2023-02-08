<?php

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

Route::get('/canciones/{id?}', function ($id = null) {
    $canciones = [];
    $canciones[] = ['nombre' => 'Vive La Vida', 'artista' => 'Coldplay'];
    $canciones[] = ['nombre' => 'Enseñame a bailar', 'artista' => 'Bad Bunny'];
    $canciones[] = ['nombre' => 'Atlantis', 'artista' => 'Seafret'];

    if(!is_null($id)) {
        $cancion = $canciones[$id];
    } else {
        $cancion = null;
    }
    //return view('canciones')->with(['canciones' => $canciones]);
    return view('canciones', compact('canciones', 'cancion'));
});

Route::get('/canciones/{id}', function ($id) {
    $canciones = [];
    $canciones[] = ['nombre' => 'Vive La Vida', 'artista' => 'Coldplay'];
    $canciones[] = ['nombre' => 'Enseñame a bailar', 'artista' => 'Bad Bunny'];
    $canciones[] = ['nombre' => 'Atlantis', 'artista' => 'Seafret'];

    $cancion = $canciones[$id];

    
    return view('detallecancion', compact('cancion'));
});
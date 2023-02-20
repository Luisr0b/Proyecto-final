<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function canciones($id = null)
    {
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
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function postContacto(Request $request)
    {
       // Validar informacion
       $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo' => ['required', 'integer', 'max:100'],
       ]);

       dd('Si paso la validación');
       //Guardar a BD

       //Dirrecionar a otra URL
    }
}

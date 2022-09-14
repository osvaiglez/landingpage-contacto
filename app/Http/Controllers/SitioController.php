<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function landingpage()
    {
        return view('landingpage');
    }

    public function contacto($codigo = null)
    {
        if($codigo == '1234'){
            $nombre = 'Osvaldo González';
            $correo = 'gonzalezascencioosvaldo@gmail.com';
        } else {
            $nombre = null;
            $correo = null;
        }
    
        return view('contacto', compact('codigo', 'nombre', 'correo'));
    }

    public function recibeFormContacto(Request $request)
    {
        //Recibir info
        //dd($request);

        //Validar datos
        $request->validate([
            'nombre' => 'required|max:255|min:3',
            'email' => ['required', 'email'],
        ]);

        //Insertar a DB
        //Redirigir
    }
}

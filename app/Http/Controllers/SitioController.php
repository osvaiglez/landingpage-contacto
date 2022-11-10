<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
    
        //Validar datos
        $request->validate([
            'nombre' => 'required|max:255|min:3',
            'correo' => 'required | email',
            'mensaje' => 'required | min: 5',
        ]);

        DB::table('contactos')->insert([
            'nombre' => $request->nombre,
            'email' => $request->correo,
            'mensaje' => $request->mensaje,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/contacto');

        //Insertar a DB
        //Redirigir
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{
    
    public function getPersonas(){
        $personas=Persona::all();
        return response()->json($personas,200);
    }

    public function getPersona($id_persona){
        $persona = Persona::find($id_persona);
        if($persona){
           return response()->json($persona, 200);
        }
        return response()->json('Persona no encontrado', 404);
    }
}

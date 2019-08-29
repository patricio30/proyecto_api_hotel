<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habitacion;

class HabitacionController extends Controller
{
    
    public function getHabitaciones(){
        $habitaciones=Habitacion::all();
        return response()->json($habitaciones,200);
    }

    public function getHabitacion($id_habitacion){
        $habitacion = Habitacion::find($id_habitacion);
        if($habitacion){
           return response()->json($habitacion, 200);
        }
        return response()->json('Habitacion no encontrado', 404);
    }
}

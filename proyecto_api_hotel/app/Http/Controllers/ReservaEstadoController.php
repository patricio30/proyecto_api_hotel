<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservaEstado;

class ReservaEstadoController extends Controller
{
    public function getReservasEstados(){
        $estados=ReservaEstado::all();
        return response()->json($estados,200);
    }

    public function getReservaEstado($id){
        $reserva = ReservaEstado::find($id);
        if($reserva){
           return response()->json($reserva, 200);
        }
        return response()->json('Reserva no encontrada', 404);
    }
}

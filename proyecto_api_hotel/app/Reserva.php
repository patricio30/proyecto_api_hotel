<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reserva;

class Reserva extends Model
{ 
    protected $table = 'reservas';

    protected $fillable = ['id_reserva', 'fecha_entrada', 'fecha_salida', 'hora_entrada', 
                           'hora_salida', 'cantidad_habitaciones', 'cantidad_personas', 'mayores', 'menores', 'precio_total',
                        'desayuno', 'media_pension', 'pension_completa'];

    protected $primaryKey = 'id_reserva';

    public $timestamps = false;
}

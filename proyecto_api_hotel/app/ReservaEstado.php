<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ReservaEstado;

class ReservaEstado extends Model
{ 
    protected $table = 'reservas_estados';

    protected $fillable = ['id', 'id_reserva', 'fecha_estado', 'estado'];

    protected $primaryKey = 'id';

    public $timestamps = false;
}

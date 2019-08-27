<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Habitacion;

class Habitacion extends Model
{ 
    protected $table = 'habitaciones';

    protected $fillable = ['id_habitacion', 'numero', 'capacidad', 'matrimonial', 'simple'];

    protected $primaryKey = 'id_habitacion';

    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persona;

class Persona extends Model
{
  protected $table = 'personas';
  
  protected $fillable = ['id_persona', 'tipo_documento', 'numero_documento', 'apellido', 'nombre', 'fecha_nacimiento'];
  
  protected $primaryKey = 'id_persona';
  
  public $timestamps = false;
}

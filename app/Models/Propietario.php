<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;
    protected $table='propietarios';
    protected $primaryKey='id_propietario';

    public $incrementing=false;
    public $timestamps=false;

    public $fillable=[
    	'id_propietario',
    	'nombre',
    	'primer_apellido',
    	'segundo_apellido',
    	'celular',
    	'calle',
    	'colonia',
    	'numint',
    	'localidad'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table='mascotas';
    protected $primaryKey='id_mascota';

    public $incrementing=true;
    public $timestamps=false;
    //especificar las relaciones
    public $with=['especie','raza','propietario'];

    public $fillable=[
    	'id_mascota',
    	'id_especie',
    	'id_raza',
    	'id_propietario',
    	'nombre',
    	'edad',
    	'peso',
    	'genero'
    ];

    public function especie()
    {
    	return $this->belongsTo(Especie::class,'id_especie','id_especie');
    }
     public function raza()
    {
        return $this -> belongsTo(Raza::class,'id_raza','id_raza');
    }
    public function propietario()
    {
        return $this -> belongsTo(propietario::class,'id_propietario','id_propietario');
    }


}

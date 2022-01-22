<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    use HasFactory;
    protected $table='razas';
    protected $primaryKey='id_raza';

    public $incrementing=true;
    public $timestamps=false;

    public $fillable=[
    	'id_raza',
    	'raza'
    ];
}

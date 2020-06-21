<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuaderno_medico extends Model
{
    protected $table="cuadernos_medicos";

    protected $fillable=[
           'user_id',
            'fecha',
            'nombre',
            'estado_civil',
            'ocupacion',
            'dato',
            'edad',
            'diagnostico',
            'nro_ficha'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Perfil;
use App\Chequeo;
class Paciente extends Model
{
    protected $table="pacientes";
    protected $fillable=[
        'perfil_id',
        'responsable_id',
        'idioma_hablado',
        'idioma_materno',
        'auto_pertenencia_cultural',
        'ocupacion_productiva',
        'ocupacion_reproductiva',
        'gestion_comunitaria',
        'quien_decidio',
        'estado_civil',
        'escolaridad',
        'grupo_sanguineo',
        'factor_rh',
        'otro',
        'establecimiento',
        'comunidad',
        'red',
        'municipio',
        'provincia',
        'no_hc',
        'no_sumi',
        'observaciones',
        'estado'
    ];

    public function perfil()
    {
        return $this->BelongsTo(Perfil::class);
    }

    public function chequeos()
    {
        return $this->HasMany(Chequeo::class);
    }
}

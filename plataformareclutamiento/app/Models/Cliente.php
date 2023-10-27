<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $fillable = [
        'giro',
        'rut',
        'razonsocial',
        'direccion',
        'idpais',
        'idregion',
        'idcomuna',
        'telefono',
        'email',
        'anofundacion',
        'nombrecontacto',
        'cargocontacto',
        'telefonocontacto',
        'emailcontacto',
        'esestudiojuridico',
        'socioadministrador',
        'numerosocios',
        'numerossociossenior',
        'numerossociosjunior',
        'gerentegeneral',
        'gerenteadminfin',
        'gerentecomunicaciones',
        'numpersonaladmin',
        'industria',
    ];
}

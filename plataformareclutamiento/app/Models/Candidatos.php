<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidatos extends Model
{
    use HasFactory;
    protected $fillable = [
        'rut',
        'nombres',
        'apellidopaterno',
        'apellidomaterno',
        'fechanacimiento',
        'email',
        'telefono',
        'idestadocivil',
        'nacionalidad',
        'ididioma',
        'direccion',
        'idpais',
        'idregion',
        'idcomuna',
        'idgenero',
        'explabestjur',
        'explabempr',
        'explabsecpub',
        'estudiosder',
        'estudiospost',
        'estudiosconv',
        'estudiosotros',
        'estudiosbasmed',
        'idiomanat',
        'idiomaava',
        'idiomamed',
        'idiomabas',
        'idiomanoh',
        'idiomaotro',
        'archivoscv',
        'archivosvid',
        'archivoscer',
    ];
}

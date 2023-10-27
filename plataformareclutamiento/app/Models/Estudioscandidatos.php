<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudioscandidatos extends Model
{
    use HasFactory;
    protected $fillable = [
        'idcandidato',
        'idnivelestudio',
        'idinstitucion',
        'idpais',
        'idregion',
        'idcomuna',
        'ranking',
        'anoingreso',
        'anoengreso',
        'promnotas',
        'notaexamgrado',
        'fechatitulacion',
        'fechajuramento',
        'nombreestudio',
    ];
}

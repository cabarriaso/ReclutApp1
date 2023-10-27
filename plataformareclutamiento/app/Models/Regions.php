<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;
    protected $fillable = [
        'idpais',
        'codigo',
        'glosa',
    ];

    public function Pais(){
        return $this->belongsTo("App\Pais");
    }

    public function Ciudads(){
        return $this->hasMany("App\Ciudads");
    }
}

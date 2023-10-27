<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CiudadsController extends Controller
{
    public function index(){

    }

    public function Regions(){
        return $this->belongsTo("App\Regions");
    }
}

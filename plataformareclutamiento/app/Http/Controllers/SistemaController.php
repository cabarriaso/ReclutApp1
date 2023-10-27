<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function index(){
        return view("admin.sistema.index");
    }

    public function update(Request $r, $id) {   

    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Pais;
use App\Models\Regions;
use App\Models\Ciudads;

class ClienteController extends Controller
{
    public function index(){

        $clientes = Cliente::all();
        return view("cliente.index",compact('clientes'));
    }

    public function store(Request $request) {   
        $cliente = New Cliente();
        $cliente->giro = $request->input('inputGiro');
        $cliente->rut = $request->input('inputRut');
        $cliente->razonsocial = $request->input('inputRaSo');
        $cliente->direccion = $request->input('inputDire');
        $cliente->idpais = $request->input('inputPais');
        $cliente->idregion = $request->input('inputRegion');
        $cliente->idcomuna = $request->input('inputComuna');
        $cliente->telefono = $request->input('inputTeléfono');
        $cliente->email = $request->input('inputEmail');
        $cliente->anofundacion = $request->input('inputAnoFund');
        $cliente->nombrecontacto = $request->input('inputNomCon');
        $cliente->cargocontacto = $request->input('inputCargoCon');
        $cliente->telefonocontacto = $request->input('inputTeleCon');
        $cliente->emailcontacto = $request->input('inputEmailCon');
        if($request->input('Juridico') == "SI") {
            $cliente->esestudiojuridico = 1;
        }
        else {
            $cliente->esestudiojuridico = 0;
        }
        $cliente->socioadministrador = $request->input('inputSocAdmin');
        $cliente->numerosocios = $request->input('inputNumSoc');
        $cliente->numerossociossenior = $request->input('inputNumSocSr');
        $cliente->numerossociosjunior = $request->input('inputNumSocJr');
        $cliente->gerentegeneral = $request->input('inputGteGral');
        $cliente->gerenteadminfin = $request->input('inputGteAdminFin');
        $cliente->gerentecomunicaciones = $request->input('inputGteCom');
        $cliente->numpersonaladmin = $request->input('inputNumPersAdmin');
        $cliente->industria = $request->input('inputIndustria');
        $cliente->save();
        return redirect('cliente');
    }

    public function create() {   
        $paises = Pais::all();
        $regiones = Regions::all();
        $ciudades = Ciudads::all();
        return view("cliente.create",compact('paises','regiones','ciudades'));
    }

    public function edit($id) {   
        $registro = Cliente::findOrFail($id);
        $paises = Pais::all();
        $regiones = Regions::all();
        $ciudades = Ciudads::all();
        return view("cliente.edit",compact('registro','paises','regiones','ciudades'));
    }

    public function update(Request $request, $id) {   
        $cliente = Cliente::findOrFail($id);
        $cliente->giro = $request->input('inputGiro');
        $cliente->rut = $request->input('inputRut');
        $cliente->razonsocial = $request->input('inputRaSo');
        $cliente->direccion = $request->input('inputDire');
        $cliente->idpais = $request->input('inputPais');
        $cliente->idregion = $request->input('inputRegion');
        $cliente->idcomuna = $request->input('inputComuna');
        $cliente->telefono = $request->input('inputTeléfono');
        $cliente->email = $request->input('inputEmail');
        $cliente->anofundacion = $request->input('inputAnoFund');
        $cliente->nombrecontacto = $request->input('inputNomCon');
        $cliente->cargocontacto = $request->input('inputCargoCon');
        $cliente->telefonocontacto = $request->input('inputTeleCon');
        $cliente->emailcontacto = $request->input('inputEmailCon');
        if($request->input('Juridico') == "SI") {
            $cliente->esestudiojuridico = 1;
        }
        else {
            $cliente->esestudiojuridico = 0;
        }
        $cliente->socioadministrador = $request->input('inputSocAdmin');
        $cliente->numerosocios = $request->input('inputNumSoc');
        $cliente->numerossociossenior = $request->input('inputNumSocSr');
        $cliente->numerossociosjunior = $request->input('inputNumSocJr');
        $cliente->gerentegeneral = $request->input('inputGteGral');
        $cliente->gerenteadminfin = $request->input('inputGteAdminFin');
        $cliente->gerentecomunicaciones = $request->input('inputGteCom');
        $cliente->numpersonaladmin = $request->input('inputNumPersAdmin');
        $cliente->industria = $request->input('inputIndustria');
        $cliente->save(); 

        return redirect('cliente');
    }

    public function show() {   
        return view("cliente.index");
    }

    public function regiones(Pais $pais) {
        $region = Regions::where('idpais',$pais->id)->get();
        return with($region);
    }

    public function comunas(Regions $region) {
        $comunas = Ciudads::where('idregion',$region->id)->get();
        return with($comunas);
    }

}

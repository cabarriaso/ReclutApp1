<?php

namespace App\Http\Controllers;
use App\Models\Candidatos;
use App\Models\Pais;
use App\Models\Regions;
use App\Models\Ciudads;
use App\Models\Estadocivils;
use App\Models\Generos;
use App\Models\Idiomas;
use App\Models\Tipoestudios;
use App\Models\Institucions;
use App\Models\Estudioscandidatos;

use Illuminate\Http\Request;

class CandidatosController extends Controller
{
    public $idcandidato = 0;

    public function index(){
        $candidatos = Candidatos::all();
        return view("candidatos.index",compact('candidatos'));
    }

    public function create() {   
        $paises = Pais::all();
        $regiones = Regions::all();
        $ciudades = Ciudads::all();
        $estadoscivil = Estadocivils::all();
        $generos = Generos::all();
        $idiomas = Idiomas::all();
        return view("candidatos.create",compact('paises','regiones','ciudades','estadoscivil','generos','idiomas'));
    }   

    public function store(Request $request) {   
        $candidato = New Candidatos();
        $candidato->rut = $request->input('inputRut');
        $candidato->nombres = $request->input('inputNombres');
        $candidato->apellidopaterno = $request->input('inputApPa');
        $candidato->apellidomaterno = $request->input('inputApMa');
        $candidato->fechanacimiento = $request->input('inputFechaNac');
        $candidato->idestadocivil = $request->input('inputEstCiv');
        $candidato->idgenero = $request->input('inputGenero');
        $candidato->nacionalidad = $request->input('inputNacionalidad');
        $candidato->ididioma = $request->input('inputIdioma');
        $candidato->telefono = $request->input('inputTeléfono');
        $candidato->email = $request->input('inputEmail');
        $candidato->direccion = $request->input('inputDireccion');
        $candidato->idpais = $request->input('inputPais');
        $candidato->idregion = $request->input('inputRegion');
        $candidato->idcomuna = $request->input('inputComuna');      

        if($request->input('explabestjur') == "SI") {
            $candidato->explabestjur = 1;
        }
        else {
            $candidato->explabestjur = 0;
        }
        if($request->input('explabemp') == "SI") {
            $candidato->explabemp = 1;
        }
        else {
            $candidato->explabemp = 0;
        }
        if($request->input('explabsecpub') == "SI") {
            $candidato->explabsecpub = 1;
        }
        else {
            $candidato->explabsecpub = 0;
        }
        if($request->input('estder') == "SI") {
            $candidato->estder = 1;
        }
        else {
            $candidato->estder = 0;
        }
        if($request->input('estpostgra') == "SI") {
            $candidato->estpostgra = 1;
        }
        else {
            $candidato->estpostgra = 0;
        }
        if($request->input('estconvalidacion') == "SI") {
            $candidato->estconvalidacion = 1;
        }
        else {
            $candidato->estconvalidacion = 0;
        }
        if($request->input('estotros') == "SI") {
            $candidato->estotros = 1;
        }
        else {
            $candidato->estotros = 0;
        }
        if($request->input('estbasmed') == "SI") {
            $candidato->estbasmed = 1;
        }
        else {
            $candidato->estbasmed = 0;
        }
        if($request->input('inglesnat') == "SI") {
            $candidato->inglesnat = 1;
        }
        else {
            $candidato->inglesnat = 0;
        }
        if($request->input('inglesavanzado') == "SI") {
            $candidato->inglesavanzado = 1;
        }
        else {
            $candidato->inglesavanzado = 0;
        }
        if($request->input('inglesmedio') == "SI") {
            $candidato->inglesmedio = 1;
        }
        else {
            $candidato->inglesmedio = 0;
        }
        if($request->input('inglesbasico') == "SI") {
            $candidato->inglesbasico = 1;
        }
        else {
            $candidato->inglesbasico = 0;
        }
        if($request->input('inglesnohabla') == "SI") {
            $candidato->inglesnohabla = 1;
        }
        else {
            $candidato->inglesnohabla = 0;
        }
        if($request->input('inglesotros') == "SI") {
            $candidato->inglesotros = 1;
        }
        else {
            $candidato->inglesotros = 0;
        }
        if($request->input('adjcurvi') == "SI") {
            $candidato->adjcurvi = 1;
        }
        else {
            $candidato->adjcurvi = 0;
        }
        if($request->input('adjvideo') == "SI") {
            $candidato->adjvideo = 1;
        }
        else {
            $candidato->adjvideo = 0;
        }
        if($request->input('adjcertificacion') == "SI") {
            $candidato->adjcertificacion = 1;
        }
        else {
            $candidato->adjcertificacion = 0;
        }
      
        $candidato->save();

        $ultimocandidato = Candidatos::select('id')->orderBy('id', 'desc')->first();

        $idcandidato = $ultimocandidato->id;

        return view("candidatos.estudios");
    }

    public function edit($id) {   
        $paises = Pais::all();
        $regiones = Regions::all();
        $ciudades = Ciudads::all();
        $estadoscivil = Estadocivils::all();
        $generos = Generos::all();
        $idiomas = Idiomas::all();
        $registro = Candidatos::findOrFail($id);
        return view("candidatos.edit",compact('paises','regiones','ciudades','estadoscivil','generos','idiomas','registro'));
    }   

    public function update(Request $request, $id) {   
        $candidato = Candidatos::findOrFail($id);
        $candidato->rut = $request->input('inputRut');
        $candidato->nombres = $request->input('inputNombres');
        $candidato->apellidopaterno = $request->input('inputApPa');
        $candidato->apellidomaterno = $request->input('inputApMa');
        $candidato->fechanacimiento = $request->input('inputFechaNac');
        $candidato->idestadocivil = $request->input('inputEstCiv');
        $candidato->idgenero = $request->input('inputGenero');
        $candidato->nacionalidad = $request->input('inputNacionalidad');
        $candidato->ididioma = $request->input('inputIdioma');
        $candidato->telefono = $request->input('inputTeléfono');
        $candidato->email = $request->input('inputEmail');
        $candidato->direccion = $request->input('inputDireccion');
        $candidato->idpais = $request->input('inputPais');
        $candidato->idregion = $request->input('inputRegion');
        $candidato->idcomuna = $request->input('inputComuna');      

        if($request->input('explabestjur') == "SI") {
            $candidato->explabestjur = 1;
        }
        else {
            $candidato->explabestjur = 0;
        }
        if($request->input('explabemp') == "SI") {
            $candidato->explabemp = 1;
        }
        else {
            $candidato->explabemp = 0;
        }
        if($request->input('explabsecpub') == "SI") {
            $candidato->explabsecpub = 1;
        }
        else {
            $candidato->explabsecpub = 0;
        }
        if($request->input('estder') == "SI") {
            $candidato->estder = 1;
        }
        else {
            $candidato->estder = 0;
        }
        if($request->input('estpostgra') == "SI") {
            $candidato->estpostgra = 1;
        }
        else {
            $candidato->estpostgra = 0;
        }
        if($request->input('estconvalidacion') == "SI") {
            $candidato->estconvalidacion = 1;
        }
        else {
            $candidato->estconvalidacion = 0;
        }
        if($request->input('estotros') == "SI") {
            $candidato->estotros = 1;
        }
        else {
            $candidato->estotros = 0;
        }
        if($request->input('estbasmed') == "SI") {
            $candidato->estbasmed = 1;
        }
        else {
            $candidato->estbasmed = 0;
        }
        if($request->input('inglesnat') == "SI") {
            $candidato->inglesnat = 1;
        }
        else {
            $candidato->inglesnat = 0;
        }
        if($request->input('inglesavanzado') == "SI") {
            $candidato->inglesavanzado = 1;
        }
        else {
            $candidato->inglesavanzado = 0;
        }
        if($request->input('inglesmedio') == "SI") {
            $candidato->inglesmedio = 1;
        }
        else {
            $candidato->inglesmedio = 0;
        }
        if($request->input('inglesbasico') == "SI") {
            $candidato->inglesbasico = 1;
        }
        else {
            $candidato->inglesbasico = 0;
        }
        if($request->input('inglesnohabla') == "SI") {
            $candidato->inglesnohabla = 1;
        }
        else {
            $candidato->inglesnohabla = 0;
        }
        if($request->input('inglesotros') == "SI") {
            $candidato->inglesotros = 1;
        }
        else {
            $candidato->inglesotros = 0;
        }
        if($request->input('adjcurvi') == "SI") {
            $candidato->adjcurvi = 1;
        }
        else {
            $candidato->adjcurvi = 0;
        }
        if($request->input('adjvideo') == "SI") {
            $candidato->adjvideo = 1;
        }
        else {
            $candidato->adjvideo = 0;
        }
        if($request->input('adjcertificacion') == "SI") {
            $candidato->adjcertificacion = 1;
        }
        else {
            $candidato->adjcertificacion = 0;
        }
      
        $candidato->save();

        return redirect('candidatos');
    }
    
    public function estudios() {
        $paises = Pais::all();
        $regiones = Regions::all();
        $ciudades = Ciudads::all();
        $estadoscivil = Estadocivils::all();
        $generos = Generos::all();
        $idiomas = Idiomas::all();
        $estudios = Tipoestudios::all();
        $institucions = Institucions::all();
        //$estudioscand = Estudioscandidato::findOrFail($idcandidato);
        $estudioscand = $idcandidato;
        return view("candidatos.estudios",compact('paises','regiones','ciudades','estadoscivil','generos','idiomas','estudios','institucions','estudioscand'));
    }
    
    public function agregarestudio(Request $request) {
        $estcandid = New Estudioscandidatos();

        $estcandid->idcandidato = $idcandidato;
        $estcandid->idnivelestudio = $request->input('inputEstudios');
        $estcandid->idinstitucion = $request->input('inputInstitucion');
        $estcandid->idpais = $request->input('inputPais');
        $estcandid->idregion = $request->input('inputRegion');
        $estcandid->idcomuna = $request->input('inputComuna');
        $estcandid->ranking = $request->input('inputRanking');
        $estcandid->anoingreso = $request->input('inputIngreso');
        $estcandid->anoegreso = $request->input('inputEgreso');
        $estcandid->promnotas = $request->input('inputPromNotas');
        $estcandid->notaexamgrado = $request->input('inputNotExGr');
        $estcandid->fechatitulacion = $request->input('inputFechaTit');
        $estcandid->fechajuramento = $request->input('inputFechaJur');
        $estcandid->nombreestudio = $request->input('inputGlosaEstudio');

        $estcandid->save();
        return redirect('candidatos');
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

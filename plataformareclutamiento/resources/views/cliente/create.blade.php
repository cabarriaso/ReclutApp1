@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
@section('content')
<div class="container" style="background-color:#082235">
    <div class="row" style="background-color:#082235">
        <div class="col-md-12">
            <h5 class="mb-3" style="color:#CEC15F">CLIENTE - FICHA</h5>
            <div class="alert alert-success" style="display:none;" id="muestrasAlert" role="alert">
                Datos Guardatos.
            </div>
            <form id="formDatosMuestra" action="{{ url('cliente') }}" method="POST">
                @csrf
                <br>
		        <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        RUT
                        <input type="text" class="form-control form-control-sm" name="inputRut" id="inputRut" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-7" style="color:#CEC15F">
                        Razon Social
                        <input type="text" class="form-control form-control-sm" name="inputRaSo" id="inputRaSo" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        <label>¿Es Estudio Jurídico?</label>
                        <div class="col-sm-9">
                            <input type="radio" name="Juridico" value="SI"> SI
                            <input type="radio" name="Juridico" value="NO"> NO
                        </div>
                    </div>
                </div>
                <div class="row" style="color:#CEC15F">
    			    <div class="col-xs-2 col-md-2 col-lg-5">
                        Dirección
                        <input type="text" class="form-control form-control-sm" name="inputDire" id="inputDire" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        País
                        <select class="form-control form-control-sm searchSelector" name="inputPais" id="inputPais" required>
                            <option value="default" selected disabled>Seleccionar</option>
                            <?php if (isset($paises)) {
                                foreach ($paises as $a) { ?>
                                <option value="<?= $a['id'] ?>">
                                    <?= $a['nombre'] ?>
                                </option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Región
                        <select class="form-control form-control-sm searchSelector" name="inputRegion" id="inputRegion">
                        </select>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Comuna
                        <select class="form-control form-control-sm searchSelector" name="inputComuna" id="inputComuna">
                            <option value="default" selected disabled>Seleccionar</option>
        
                        </select>
                    </div>            
                </div>
                <div class="row" style="color:#CEC15F">
                    <div class="col-xs-2 col-md-2 col-lg-3">
                        Industria
                        <input type="text" class="form-control form-control-sm" name="inputIndustria" id="inputIndustria" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Email
                        <input type="text" class="form-control form-control-sm" name="inputEmail" id="inputEmail" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Teléfono
                        <input type="text" class="form-control form-control-sm" name="inputTeléfono" id="inputTeléfono" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Año Fundación
                        <input type="text" class="form-control form-control-sm" name="inputAnoFund" id="inputAnoFund" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Número Personal Administrativo
                        <input type="text" class="form-control form-control-sm" name="inputNumPersAdmin" id="inputNumPersAdmin" value="" required>
                    </div>
                </div>
                <div class="row" style="color:#CEC15F">
                    <div class="col-xs-2 col-md-2 col-lg-3">
                        Nombre Contacto
                        <input type="text" class="form-control form-control-sm" name="inputNomCon" id="inputNomCon" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-3">
                        Cargo Contacto
                        <input type="text" class="form-control form-control-sm" name="inputCargoCon" id="inputCargoCon" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-3">
                        Email Contacto
                        <input type="text" class="form-control form-control-sm" name="inputEmailCon" id="inputEmailCon" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Teléfono Contacto
                        <input type="text" class="form-control form-control-sm" name="inputTeleCon" id="inputTeleCon" value="" required>
                    </div>
                </div>
                <div class="row" style="color:#CEC15F">
                    <div class="col-xs-2 col-md-1 col-lg-1">
                        Empresa
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Gerente General
                        <input type="text" class="form-control form-control-sm" name="inputGteGral" id="inputGteGral" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Gerente Admin y Finanzas
                        <input type="text" class="form-control form-control-sm" name="inputGteAdminFin" id="inputGteAdminFin" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Gerente Comunicaciones
                        <input type="text" class="form-control form-control-sm" name="inputGteCom" id="inputGteCom" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-4">
                        Giro
                        <input type="text" class="form-control form-control-sm" name="inputGiro" id="inputGiro" value="" required>
                    </div>
                </div>
                <div class="row" style="color:#CEC15F">
                    <div class="col-xs-2 col-md-2 col-lg-1">
                        Estudio Jurídico	
                    </div>
                    <div class="col-xs-2 col-md-4 col-lg-4">
                        Socio Administrador
                        <input type="text" class="form-control form-control-sm" name="inputSocAdmin" id="inputSocAdmin" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Número Socios
                        <input type="number" class="form-control form-control-sm" name="inputNumSoc" id="inputNumSoc" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Número Socios Senior
                        <input type="number" class="form-control form-control-sm" name="inputNumSocSr" id="inputNumSocSr" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Número Socios Junior
                        <input type="number" class="form-control form-control-sm" name="inputNumSocJr" id="inputNumSocJr" value="" required>
                    </div>
                </div>
                <br>
                <div class="col-xs-2 col-md-2 col-lg-2" >
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        <hr>
    </div>
</div>

<script>
    const pais = document.getElementById('inputPais')
    const regiones = document.getElementById('inputRegion')
    const comunas = document.getElementById('inputComuna')
   

    pais.addEventListener('change',async (e)=>{
        const response = await fetch(`/cliente/${e.target.value}/regiones`)

        const data = await response.json();

        console.log(data);

        let options = `<option value="default" selected disabled>Seleccionar</option>`;

        data.forEach(element => {
            options = options + `<option value="${element.id}">${element.glosa}</option>`
        });

        regiones.innerHTML = options;

    })

    regiones.addEventListener('change',async (e2)=>{
        const response2 = await fetch(`/cliente/${e2.target.value}/comunas`)

        const data2 = await response2.json();

        console.log(data2);

        let options2 = `<option value="default" selected disabled>Seleccionar</option>`;

        data2.forEach(element2 => {
            options2 = options2 + `<option value="${element2.id}">${element2.glosa}</option>`
        });

        comunas.innerHTML = options2;

    })


</script>
@endsection
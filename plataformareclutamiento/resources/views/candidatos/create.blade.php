@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

@section('content')
<div class="container" style="background-color:#082235">
    <div class="row" style="background-color:#082235">
        <div class="col-md-12">
            <h5 class="mb-3" style="color:#CEC15F">CANDIDATO - FICHA</h5>
            <div class="alert alert-success" style="display:none;" id="muestrasAlert" role="alert">
                Datos Guardatos.
            </div>
            <form id="formDatosMuestra" action="{{ url('candidatos') }}" method="POST">
                @csrf
                <br>
		        <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Rut/Pasaporte
                        <input type="text" class="form-control form-control-sm" name="inputRut" id="inputRut" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Nombres
                        <input type="text" class="form-control form-control-sm" name="inputNombres" id="inputNombres" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Ap Paterno
                        <input type="text" class="form-control form-control-sm" name="inputApPa" id="inputApPa" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Ap Materno
                        <input type="text" class="form-control form-control-sm" name="inputApMa" id="inputApMa" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Fec Nacimimiento
                        <input type="date" class="form-control form-control-sm" name="inputFechaNac" id="inputFechaNac" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-1 col-lg-1" style="color:#CEC15F">
                        Estado Civil 
                        <select class="form-control form-control-sm searchSelector" name="inputEstCiv" id="inputEstCiv" required>
                            <option value="default" selected disabled>Seleccionar</option>
                            <?php if (isset($estadoscivil)) {
                                foreach ($estadoscivil as $ec) { ?>
                                <option value="<?= $ec['id'] ?>">
                                    <?= $ec['glosa'] ?>
                                </option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="row" style="color:#CEC15F">
                <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Género
                        <select class="form-control form-control-sm searchSelector" name="inputGenero" id="inputGenero" required>
                            <option value="default" selected disabled>Seleccionar</option>
                            <?php if (isset($generos)) {
                                foreach ($generos as $gen) { ?>
                                <option value="<?= $gen['id'] ?>">
                                    <?= $gen['glosa'] ?>
                                </option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Nacionalidad
                        <select class="form-control form-control-sm searchSelector" name="inputNacionalidad" id="inputNacionalidad" required>
                            <option value="default" selected disabled>Seleccionar</option>
                            <?php if (isset($paises)) {
                                foreach ($paises as $a) { ?>
                                <option value="<?= $a['id'] ?>">
                                    <?= $a['nacionalidad'] ?>
                                </option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Idioma Nativo
                        <select class="form-control form-control-sm searchSelector" name="inputIdioma" id="inputIdioma" required>
                            <option value="default" selected disabled>Seleccionar</option>
                            <?php if (isset($idiomas)) {
                                foreach ($idiomas as $id) { ?>
                                <option value="<?= $id['id'] ?>">
                                    <?= $id['glosa'] ?>
                                </option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Teléfono
                        <input type="text" class="form-control form-control-sm" name="inputTeléfono" id="inputTeléfono" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3">
                        Email
                        <input type="text" class="form-control form-control-sm" name="inputEmail" id="inputEmail" value="" required>
                    </div>          
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:black; background-color:#CEC15F;">
                       Residencia Actual
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:black; background-color:#CEC15F;">

                    </div>
                    <div class="col-xs-2 col-md-4 col-lg-4" style="color:black; background-color:#CEC15F; text-align: center;">

                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:black; background-color:#CEC15F;">

                    </div>
                </div>
                <br>
                <div class="row" style="color:#CEC15F">
                    <div class="col-xs-3 col-md-5 col-lg-5">
                        Dirección
                        <input type="text" class="form-control form-control-sm" name="inputDireccion" id="inputDireccion" value="" required>
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
                <br>
                <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:black; background-color:#CEC15F;">
                        Experiencia Laboral
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:black; background-color:#CEC15F;">
                        Estudios
                    </div>
                    <div class="col-xs-2 col-md-4 col-lg-4" style="color:black; background-color:#CEC15F; text-align: center;">
                        Idioma Ingles
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:black; background-color:#CEC15F;">
                        Archivos Adjuntos
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="explabestjur" id="explabestjur">  En Estudios Juridicos
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="estder" id="estder">  Derecho
                    </div>
                    <div class="col-xs-2 col-md-4 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="inglesnat" id="inglesnat"> Nativo
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="inglesbasico" id="inglesbasico"> Básico
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="adjcurvi" id="adjcurvi"> Curriculum Vitae
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="explabemp" id="explabemp"> En Empresas
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="estpostgra" id="estpostgra"> Post grados
                    </div>
                    <div class="col-xs-2 col-md-4 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="inglesavanzado" id="inglesavanzado"> Avanzado
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="inglesnohabla" id="inglesnohabla"> No habla
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="adjvideo" id="adjvideo"> Video de presentación
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="explabsecpub" id="explabsecpub"> En el sector público
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="estconvalidacion" id="estconvalidacion"> Convalidación de título
                    </div>
                    <div class="col-xs-2 col-md-4 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="inglesmedio" id="inglesmedio"> Medio
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-2" style="color:#CEC15F">
                        
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="adjcertificacion" id="adjcertificacion"> Certificación de Inglés
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="estotros" id="estotros"> Otros
                    </div>
                    <div class="col-xs-2 col-md-4 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="inglesotros" id="inglesotros"> Otros Idiomas
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-2" style="color:#CEC15F">
                        
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="estbasmed" id="estbasmed"> Básica y Media
                    </div>
                    <div class="col-xs-2 col-md-4 col-lg-2" style="color:#CEC15F">
                        
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-2" style="color:#CEC15F">
                        
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        
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
        const response = await fetch(`/candidatos/${e.target.value}/regiones`)

        const data = await response.json();

        console.log(data);

        let options = `<option value="default" selected disabled>Seleccionar</option>`;

        data.forEach(element => {
            options = options + `<option value="${element.id}">${element.glosa}</option>`
        });

        regiones.innerHTML = options;

    })

    regiones.addEventListener('change',async (e2)=>{
        const response2 = await fetch(`/candidatos/${e2.target.value}/comunas`)

        const data2 = await response2.json();

        console.log(data2);

        let options2 = `<option value="default" selected disabled>Seleccionar</option>`;

        data2.forEach(element2 => {
            options2 = options2 + `<option value="${element2.id}">${element2.glosa}</option>`
        });

        comunas.innerHTML = options2;

    })

    var date = $('#inputFechaNac').datepicker({ dateFormat: 'yy-mm-dd' }).val();

</script>
@endsection
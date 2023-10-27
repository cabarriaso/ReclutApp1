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
            <form id="formDatosMuestra" action="{{route('candidatos.update',$registro->id)}}" method="POST">
                @method("PUT")
                @csrf
                <br>
		        <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Rut/Pasaporte
                        <input type="text" class="form-control form-control-sm" name="inputRut" id="inputRut" value="{!! $registro->rut !!}" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Nombres
                        <input type="text" class="form-control form-control-sm" name="inputNombres" id="inputNombres" value="{!! $registro->nombres !!}" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Ap Paterno
                        <input type="text" class="form-control form-control-sm" name="inputApPa" id="inputApPa" value="{!! $registro->apellidopaterno !!}" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Ap Materno
                        <input type="text" class="form-control form-control-sm" name="inputApMa" id="inputApMa" value="{!! $registro->apellidomaterno !!}" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Fec Nacimimiento
                        <input type="date" class="form-control form-control-sm" name="inputFechaNac" id="inputFechaNac" value="{!! $registro->fechanacimiento !!}" required>
                    </div>
                    <div class="col-xs-2 col-md-1 col-lg-1" style="color:#CEC15F">
                        Estado Civil 
                        <select class="form-control form-control-sm searchSelector" name="inputEstCiv" id="inputEstCiv" required>
                            <option value="default" selected disabled>Seleccionar</option>
                            <?php if (isset($estadoscivil)) {
                                foreach ($estadoscivil as $ec) { ?>
                                <option value="<?= $ec['id'] ?>" {{ $ec->id == $registro->idestadocivil ? 'selected' : '' }}>
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
                                <option value="<?= $gen['id'] ?>" {{ $gen->id == $registro->idgenero ? 'selected' : '' }}>
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
                                <option value="<?= $a['id'] ?>" {{ $a->id == $registro->nacionalidad ? 'selected' : '' }}>
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
                                <option value="<?= $id['id'] ?>" {{ $id->id == $registro->ididioma ? 'selected' : '' }}>
                                    <?= $id['glosa'] ?>
                                </option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        Teléfono
                        <input type="text" class="form-control form-control-sm" name="inputTeléfono" id="inputTeléfono" value="{!! $registro->telefono !!}" required>
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3">
                        Email
                        <input type="text" class="form-control form-control-sm" name="inputEmail" id="inputEmail" value="{!! $registro->email !!}" required>
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
                        <input type="text" class="form-control form-control-sm" name="inputDireccion" id="inputDireccion" value="{!! $registro->direccion !!}" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2">
                        País
                        <select class="form-control form-control-sm searchSelector" name="inputPais" id="inputPais" required>
                            <option value="default" selected disabled>Seleccionar</option>
                            <?php if (isset($paises)) {
                                foreach ($paises as $a) { ?>
                                <option value="<?= $a['id'] ?>" {{ $a->id == $registro->idpais ? 'selected' : '' }}>
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
                        <input class="form-check-input" type="checkbox" value="SI" name="explabestjur" id="explabestjur" <?php if( $registro->explabestjur == 1) { echo "checked"; }?> >  En Estudios Juridicos
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="estder" id="estder" <?php if( $registro->estder == 1) { echo "checked"; }?>>  Derecho
                    </div>
                    <div class="col-xs-2 col-md-4 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="inglesnat" id="inglesnat" <?php if( $registro->inglesnat == 1) { echo "checked"; }?>> Nativo
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="inglesbasico" id="inglesbasico" <?php if( $registro->inglesbasico == 1) { echo "checked"; }?>> Básico
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="adjcurvi" id="adjcurvi" <?php if( $registro->adjcurvi == 1) { echo "checked"; }?>> Curriculum Vitae
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="explabemp" id="explabemp" <?php if( $registro->explabemp == 1) { echo "checked"; }?>> En Empresas
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="estpostgra" id="estpostgra" <?php if( $registro->estpostgra == 1) { echo "checked"; }?>> Post grados
                    </div>
                    <div class="col-xs-2 col-md-4 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="inglesavanzado" id="inglesavanzado" <?php if( $registro->inglesavanzado == 1) { echo "checked"; }?>> Avanzado
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="inglesnohabla" id="inglesnohabla" <?php if( $registro->inglesnohabla == 1) { echo "checked"; }?>> No habla
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="adjvideo" id="adjvideo" <?php if( $registro->adjvideo == 1) { echo "checked"; }?>> Video de presentación
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="explabsecpub" id="explabsecpub" <?php if( $registro->explabsecpub == 1) { echo "checked"; }?>> En el sector público
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="estconvalidacion" id="estconvalidacion" <?php if( $registro->estconvalidacion == 1) { echo "checked"; }?>> Convalidación de título
                    </div>
                    <div class="col-xs-2 col-md-4 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="inglesmedio" id="inglesmedio" <?php if( $registro->inglesmedio == 1) { echo "checked"; }?>> Medio
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-2" style="color:#CEC15F">
                        
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="adjcertificacion" id="adjcertificacion" <?php if( $registro->adjcertificacion == 1) { echo "checked"; }?>> Certificación de Inglés
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="estotros" id="estotros" <?php if( $registro->estotros == 1) { echo "checked"; }?>> Otros
                    </div>
                    <div class="col-xs-2 col-md-4 col-lg-2" style="color:#CEC15F">
                        <input class="form-check-input" type="checkbox" value="SI" name="inglesotros" id="inglesotros" <?php if( $registro->inglesotros == 1) { echo "checked"; }?>> Otros Idiomas
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
                        <input class="form-check-input" type="checkbox" value="SI" name="estbasmed" id="estbasmed" <?php if( $registro->estbasmed == 1) { echo "checked"; }?>> Básica y Media
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
   
    const initialregion = async (idpais)=>{
        const response = await fetch(`/cliente/${idpais}/regiones`)

        const data = await response.json();

        let options = `<option value="default" selected disabled>Seleccionar</option>`;

        const regionid = <?php echo $registro->idregion; ?>

        console.log("region inicial "+regionid);

        data.forEach(element => {
            options = options + `<option value="${element.id}" ${  element.id == regionid ? 'selected':'' } >${element.glosa}</option>`
        });

        regiones.innerHTML = options;
    }  
   
    const initialcomuna = async (idregion)=>{
        console.log("region ingresada "+idregion);
        const response2 = await fetch(`/cliente/${idregion}/comunas`)

        const data2 = await response2.json();

        let options2 = `<option value="default" selected disabled>Seleccionar</option>`;

        const comunaid = <?php echo $registro->idcomuna; ?>

        data2.forEach(element2 => {
            options2 = options2 + `<option value="${element2.id}" ${  element2.id == comunaid ? 'selected':'' } >${element2.glosa}</option>`
        });

        comunas.innerHTML = options2;
    }

    initialregion(pais.value).then(function() {  
        const regionesfin = document.getElementById('inputRegion');
        console.log("regionesfin "+regionesfin.value);
        initialcomuna(regionesfin.value); 
    });

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
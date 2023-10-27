<!DOCTYPE html>
@extends('layouts.app')
<html lang="en">
@section('content')
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Marcelo Garrido">
  <title>Control de Proyectos</title>
  <!-- Bootstrap core CSS -->

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">
  <!-- Fuentes Externas -->
  <link href="https://fonts.cdnfonts.com/css/scalasansot" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/franklin-gothic-demi-2" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>

  
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-success" style="display:none;" id="muestrasAlert" role="alert">
        Datos Guardatos.
      </div>
      <form id="formResultadosMuestra">
      <table width="100%">
            <tr>
                <td width="50%">
                    <h5 class="mb-3" style="color:#CEC15F">CANDIDATO - ESTUDIOS</h5>
                </td>
                <td width="50%">
                    <div class="col-xs-2 col-md-2 col-lg-2">
                      <a class="btn btn-success" id="btnAgrega" style="margin-right :15px;">Agregar</a>
                    </div>
                </td>
            </tr>
        </table>
        <div class="alert alert-danger" id="pacienteAlert" style="display:none;" role="alert">Paciente ya Ingresado</div>
        @csrf
		        <div class="row">
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Tipo Estudio 
                        <select class="form-control form-control-sm searchSelector" name="inputEstudios" id="inputEstudios" required>
                            <option value="default" selected disabled>Seleccionar</option>
                            <?php if (isset($estudios)) {
                                foreach ($estudios as $est) { ?>
                                <option value="<?= $est['id'] ?>">
                                    <?= $est['glosa'] ?>
                                </option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="col-xs-2 col-md-3 col-lg-3" style="color:#CEC15F">
                        Institución
                        <select class="form-control form-control-sm searchSelector" name="inputInstitucion" id="inputInstitucion" required>
                            <option value="default" selected disabled>Seleccionar</option>
                            <?php if (isset($institucions)) {
                                foreach ($institucions as $ins) { ?>
                                <option value="<?= $ins['id'] ?>">
                                    <?= $ins['glosa'] ?>
                                </option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
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
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Región
                        <select class="form-control form-control-sm searchSelector" name="inputRegion" id="inputRegion">
                        </select>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Comuna
                        <select class="form-control form-control-sm searchSelector" name="inputComuna" id="inputComuna">
                            <option value="default" selected disabled>Seleccionar</option>
        
                        </select>
                    </div>
                </div>
                <div class="row" style="color:#CEC15F">
                    <div class="col-xs-2 col-md-1 col-lg-1" style="color:#CEC15F">
                        Ranking
                        <input type="number" class="form-control form-control-sm" name="inputRanking" id="inputRanking" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-1 col-lg-1" style="color:#CEC15F">
                        Año Ingreso
                        <input type="number" class="form-control form-control-sm" name="inputIngreso" id="inputIngreso" min="1900" max="2030" value="2000" step="1" required>
                    </div>
                    <div class="col-xs-2 col-md-1 col-lg-1" style="color:#CEC15F">
                        Año Egreso
                        <input type="number" class="form-control form-control-sm" name="inputEgreso" id="inputEgreso" min="1900" max="2030" value="2000" step="1" required>
                    </div>   
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Promedio Notas
                        <input type="number" class="form-control form-control-sm" name="inputPromNotas" id="inputPromNotas" min="5.0" max="10.0" value="5.0" step=".1" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Nota Exámen Grado
                        <input type="number" class="form-control form-control-sm" name="inputNotExGr" id="inputNotExGr" min="5.0" max="10.0" value="5.0" step=".1" required>
                    </div> 
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Fecha Titulación
                        <input type="date" class="form-control form-control-sm" name="inputFechaTit" id="inputFechaTit" value="" required>
                    </div>
                    <div class="col-xs-2 col-md-2 col-lg-2" style="color:#CEC15F">
                        Fecha Juramento
                        <input type="date" class="form-control form-control-sm" name="inputFechaJur" id="inputFechaJur" value="" required>
                    </div>     
                </div>
                <div class="row" style="color:#CEC15F">
                    <div class="col-xs-2 col-md-11 col-lg-11" style="color:#CEC15F">
                        <label hidden name="lblGlosaEstudio" id="lblGlosaEstudio"> Nombre Carrera / Diplomado / Post-título / Magister / Doctorado </label>
                        <input hidden type="text" class="form-control form-control-sm" name="inputGlosaEstudio" id="inputGlosaEstudio" value="" required>
                    </div>
                </div>
                <br>
      </form>
    </div>
  </div>
  <table class="table" id="tablaMuestras">
    <thead class="thead-dark">
    </thead>
  </table>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#formDatosMuestra').validate();
    $('#formResultadosMuestra').validate();
    $('.searchSelector').select2();
    $(".datepicker").datepicker();
    tablaMuestras = $('#tablaMuestras').DataTable({
      "bInfo": false,
      "bFilter": false,
      "bLengthChange": false,
      "bPaginate": false,
      "ordering": false,
      columns: [{
          title: 'TIPO ESTUDIO',
          data: 'tipoestudio'
        },
        {
          title: 'INSTITUCIÓN',
          data: 'institucion'
        },
        {
          title: 'Año Ingreso',
          data: 'aingreso'
        },
        {
          title: 'Año Egreso',
          data: 'aegreso'
        },
        {
          title: 'Fecha Titulación',
          data: 'fechatit'
        },
        {
          title: 'Fecha Juramento',
          data: 'fechajur'
        },
        {
          title: '',
          render: function(data, type, row, meta) {
            return `<button type="button" class="btn btn-danger" onclick="eliminarMuestra(this)" style="float: right; margin-left: 10px;" >Eliminar</button>`;
          }
        },
      ],
    })
    $('#btnAgrega').on("click", function() {
      var existe = false;
      if ($('#formResultadosMuestra').valid()) {
        $.each(tablaMuestras.data().toArray(), function(index, value) {
          if (value.PACIENTEID == $("#inputPaciente").val()) {
            existe = true;
            $('#pacienteAlert').fadeIn();
            setTimeout(function() {
              $("#pacienteAlert").fadeOut();
            }, 1500);

          }
        })
        if (!existe) {
          tablaMuestras.row.add({
            PACIENTE: $("#inputPaciente option:selected").text(),
            PACIENTEID: $("#inputPaciente").val(),
            RESULTADO: $("#inputPacienteResultado option:selected").text(),
            RESULTADOID: $("#inputPacienteResultado").val()
          }).draw();
          $('#inputPaciente').select2('val','default');
          $('#formResultadosMuestra')[0].reset();

        }
      }
    })

    $('#inputExamen').on("change", function() {
      $('#inputPacienteResultado').html('<option value="default" selected disabled>Seleccionar</option>');
      $.ajax({
          type: "POST",
          url: 'index.php?v=ingresoMuestras&action=listarResultados',
          data: {
            inputExamen: $(this).val(),
          },
          dataType: "json"
        })
        .done(function(data) {
          console.log(data);
          $.each(data, function(index, value) {
            $('#inputPacienteResultado').append(new Option(value.nombreresultado, value.idresultado));
          })
        })
    })
    $('#inputProcedencia').on("change", function() {
      $('#inputPaciente').html('<option value="default" selected disabled>Seleccionar</option>');
      $.ajax({
          type: "POST",
          url: 'index.php?v=ingresoMuestras&action=listarPacientes',
          data: {
            inputProcedencia: $(this).val(),
          },
          dataType: "json"
        })
        .done(function(data) {
          console.log(data);
          $.each(data, function(index, value) {
            $('#inputPaciente').append(new Option(value.paciente, value.idpaciente));
          })
        })
    })
    $('#btnGuardar').on("click", function() {
      if ($('#formDatosMuestra').valid()) {
        $.ajax({
            type: "POST",
            url: 'index.php?v=ingresoMuestras&action=ingresar',
            data: {
              inputExamen: $('#inputExamen').val(),
              inputMetodologia: $('#inputMetodologia').val(),
              inputTimpoMuestra: $('#inputTimpoMuestra').val(),
              inputProcedencia: $('#inputProcedencia').val(),
              inputFechaAdmision: $('#inputFechaAdmision').val(),
              inputFechaValidacion: $('#inputFechaValidacion').val(),
              inputOrigen: $('#inputOrigen').val(),
              inputFechaTomaMuestra: $('#inputFechaTomaMuestra').val(),
              tabla: tablaMuestras.data().toArray()
            },
            dataType: "json"
          })
          .done(function(data) {
            $("#muestrasAlert").fadeIn();
            $('#formDatosMuestra')[0].reset();
            $('.searchSelector').select2('val','default');
            $('#tablaMuestras').dataTable().fnClearTable();
            setTimeout(function() {
              $("#muestrasAlert").fadeOut();
            }, 1500);
          })
      }
    })
  })
  eliminarMuestra = function(element) {
    focusedData = tablaMuestras.row($(element).closest('tr')).remove().draw();
  }
 $("#inputFechaAdmision").datepicker({dateFormat: 'dd/mm/yy'});
 $("#inputFechaValidacion").datepicker({dateFormat: 'dd/mm/yy'});
 $("#inputFechaTomaMuestra").datepicker({dateFormat: 'dd/mm/yy'});
</script>
@endsection
@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<link rel="stylesheet" href="/css/datatables.min.css">


@section('content')
<div class="container" style="background-color:#082235">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">
            <a href="{{route('candidatos.create')}}" class="btn btn-success">NUEVO</a>
            <br>
            <table class="table table-stripped" style="background-color:#082235" id="candidatos">
                <thead style="background-color:#082235"> 
                    <th style="background-color:#082235; color:#ffffff;"> RUT </th>
                    <th style="background-color:#082235; color:#ffffff;"> NOMBRES </th>
                    <th style="background-color:#082235; color:#ffffff;"> APELLIDO PATERNO </th>
                    <th style="background-color:#082235; color:#ffffff;"> APELLIDO MATERNO </th>
                    <th style="background-color:#082235; color:#ffffff;">  </th>
                </thead>
                <tbody>
                    @forelse ($candidatos as $item)
                    <tr>
                        <td style="background-color:#082235; color:#ffffff;"> {{$item->rut}} </td>
                        <td style="background-color:#082235; color:#ffffff;"> {{$item->nombres}} </td>
                        <td style="background-color:#082235; color:#ffffff;"> {{$item->apellidopaterno}} </td>
                        <td style="background-color:#082235; color:#ffffff;"> {{$item->apellidomaterno}} </td>
                        <td style="background-color:#082235"> 
                            <a href="{{route('candidatos.edit',$item->id)}}" class="btn btn-primary"> EDITAR </a> 
                            
                        </td>
                    </tr> 
                    @empty

                    @endforelse
                </tbody>
            </table>
            <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        </div>
    </div>
</div>
@endsection

<script>
    $(document).ready( function () {
        $('#candidatos').DataTable({
            "lengthMenu": [[5,10,50,-1],[5,10,50,"All"]]
        });
    } );
</script>
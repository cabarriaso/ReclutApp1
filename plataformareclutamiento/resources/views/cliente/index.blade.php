@extends('layouts.app')

@section('content')
<div class="container" style="background-color:#082235">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">
            <a href="{{route('cliente.create')}}" class="btn btn-success">NUEVO</a>
            <br>
            <table class="table table-stripped" style="background-color:#082235">
                <thead style="background-color:#082235"> 
                    <th style="background-color:#082235; color:#ffffff;"> RUT </th>
                    <th style="background-color:#082235; color:#ffffff;"> RAZON SOCIAL </th>
                    <th style="background-color:#082235; color:#ffffff;">  </th>
                </thead>
                <tbody>
                    @forelse ($clientes as $item)
                    <tr>
                        <td style="background-color:#082235; color:#ffffff;"> {{$item->rut}} </td>
                        <td style="background-color:#082235; color:#ffffff;"> {{$item->razonsocial}} </td>
                        <td style="background-color:#082235"> 
                            <a href="{{route('cliente.edit',$item->id)}}" class="btn btn-primary"> EDITAR </a> 
                            
                        </td>
                    </tr> 
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
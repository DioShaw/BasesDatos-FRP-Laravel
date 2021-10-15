@extends('layouts.app')
@section('content')

<head>
<link href="{{ asset('css/menu.css') }}" rel = "stylesheet">
</head>

<div class="container">

@if (Session::has('mensaje'))
<div class="alert alert-soucess alert-dismissible" role="alert" id="mensajeeditar">
{{ Session::get('mensaje') }}
<button type="button" class="close" data-dismiss="alet" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif


<div class="grid-container" id="herramientas">
    <div class="grid item"> 
      <form class="form-inline">

    <input name="buscarpor" id="busqueda" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
     <button id="btn-buscar"  class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar :C</button> 
     
  </form>
</div>

<div class="grid-item"><form action="{{ url('/asocaja/create') }}"> <button id="btn-crear" class="linea" type="submit">Crear Nuevo</button></form></div>

</div>

<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
          
            <th>Caja de compensacion</th>
            <th>Departamento</th>
            <th>Director</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Correo</th>
            <th>Acciones </th>
        </tr>
    </thead>
    <tbody>
    @foreach( $asocajas as $asocaja)
        <tr>
            <td>{{$asocaja->Nombre}}</td>
            <td>{{$asocaja->Departamento}}</td>
            <td>{{$asocaja->Director}}</td>
            <td>{{$asocaja->Telefono}}</td>
            <td>{{$asocaja->Direccion}}</td>
            <td>{{$asocaja->correo}}</td>

            @can('editar')
            <td> 
            
            <a href="{{ url('/asocaja/'.$asocaja->id.'/edit') }} " class="btn btn-warning"> Editar </a>
            <form action="{{ url('/asocaja/'.$asocaja->id) }}" class="d-inline" method="post" >
            @csrf
            {{method_field('DELETE')}}
                <input class="btn btn-danger " type="submit" onclick="return confirm('confirma')"
                 value="Borrar">
            </form>
            </td>
            @endcan
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
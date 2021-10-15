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

<div class="grid-item"><form action=" {{ url('patrocinio/create') }}"> <button id="btn-crear" class="linea" type="submit">Crear Nuevo</button></form></div>

</div>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Empresa</th>
            <th>Nombre</th>
            <th>Cargo</th>
            <th>Tema</th>
            <th>Contacto</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Presentacion</th>
            <th>  </th>
         
        </tr>
    </thead>
    <tbody>
    @foreach( $patrocinios as $patrocinio)
        <tr>
            <td>{{$patrocinio->Empresa}}</td>
            <td>{{$patrocinio->Nombre}}</td>
            <td>{{$patrocinio->Cargo}}</td>
            <td>{{$patrocinio->Tema}}</td>
            <td>{{$patrocinio->Contacto}}</td>
            <td>{{$patrocinio->Correo}}</td>
            <td>{{$patrocinio->Telefono}}</td>
            <td>{{$patrocinio->Direccion}}</td>
            <td>{{$patrocinio->Presentacion}}</td>
       
            @can('editar')
            <td> 
            
            <a href="{{ url('/patrocinio/'.$patrocinio->id.'/edit') }} " class="btn btn-warning">
                Editar
            </a>
            <form action="{{ url('/patrocinio/'.$patrocinio->id) }}" class="d-inline" method="post" >
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
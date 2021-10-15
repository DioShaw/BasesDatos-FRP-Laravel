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

<div class="grid-item"><form action="{{ url('/colegio/create') }}"> <button id="btn-crear" class="linea" type="submit">Crear Nuevo</button></form></div>

</div>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th></th>
            <th>Colegio</th>
            <th>Nit</th>
            <th>Calidad</th>
            <th>Director</th>
            <th>Contacto</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Correo</th>
            <th>Ciudad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach( $colegios as $colegio)
        <tr>
            <td>{{$colegio->id}}</td>
            <td>{{$colegio->Nombre}}</td>
            <td>{{$colegio->Nit}}</td>
            <td>{{$colegio->Calidad}}</td>
            <td>{{$colegio->Director}}</td>
            <td>{{$colegio->Contacto}}</td>
            <td>{{$colegio->Telefono}}</td>
            <td>{{$colegio->direccion}}</td>
            <td>{{$colegio->correo}}</td>
            <td>{{$colegio->ciudad}}</td>
            <td> 
            
            @can('editar')

            <a href="{{ url('/colegio/'.$colegio->id.'/edit') }} " class="btn btn-warning">
                Editar
            </a>
            
         
            
            <form action="{{ url('/colegio/'.$colegio->id) }}" class="d-inline" method="post" >
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
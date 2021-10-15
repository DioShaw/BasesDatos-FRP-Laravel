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


<div class="grid-item"><form action="{{ url('/directivo/create') }}"> <button id="btn-crear" class="linea" type="submit">Crear Nuevo</button></form></div>

</div>

</div>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
        
            <th>Id</th>
            <th>Titulo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Calidad</th>
            <th>Estado</th>
            <th>Entidad</th>
            <th>Cargo</th>
            <th>Celular</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Comentarios</th>
            <th> . </th>
        
        </tr>
    </thead>
    <tbody>
    @foreach( $directivos as $directivo)
        <tr>
            <td>{{$directivo->id}}</td>
            <td>{{$directivo->Titulo}}</td>
            <td>{{$directivo->Nombre}}</td>
            <td>{{$directivo->Apellido}}</td>
            <td>{{$directivo->Ceddula}}</td>
            <td>{{$directivo->Calidad}}</td>
            <td>{{$directivo->Estado}}</td>
            <td>{{$directivo->Entidad}}</td>
            <td>{{$directivo->Cargo}}</td>
            <td>{{$directivo->Celular}}</td>
            <td>{{$directivo->Telefono}}</td>
            <td>{{$directivo->Correo}}</td>
            <td>{{$directivo->Comentarios }}</td>

            <td> 
            @can('editar')
            <a href="{{url('/directivo/'.$directivo->id.'/edit')}}" class="btn btn-warning" >Editar </a>
            
            <form action="{{ url('/directivo/'.$directivo->id) }}" class="d-inline" method="post" >
            @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-danger " type="submit" onclick="return confirm('confirma')"
                 value="Borrar">
            </form>
            @endcan
            </td>


        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
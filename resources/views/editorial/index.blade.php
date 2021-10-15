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


<div class="grid-item"><form action="{{ url('/editorial/create') }}"> <button id="btn-crear" class="linea" type="submit">Crear Nuevo</button></form></div>

</div>

</div>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
        
            <th>Id</th>
            <th>Nombre</th>
            <th>Nit</th>
            <th>Contacto</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Descuento</th>
            <th>Acciones</th>
        
        </tr>
    </thead>
    <tbody>
    @foreach( $editorials as $editorial)
        <tr>
            <td>{{$editorial->id}}</td>
            <td>{{$editorial->Nombre}}</td>
            <td>{{$editorial->Nit}}</td>
            <td>{{$editorial->Contacto}}</td>
            <td>{{$editorial->Telefono}}</td>
            <td>{{$editorial->Correo}}</td>
            <td>{{$editorial->Descuento}}</td>

            <td> 
            @can('editar')
            <a href="{{url('/editorial/'.$editorial->id.'/edit')}}" class="btn btn-warning" >Editar </a>
            
            <form action="{{ url('/editorial/'.$editorial->id) }}" class="d-inline" method="post" >
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
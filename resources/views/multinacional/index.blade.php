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
    

<div class="grid-item"><form action="{{ url('/multinacional/create')}}"> <button id="btn-crear" class="linea" type="submit">Crear Nuevo</button></form></div>

</div>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Pais</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th></th>
        
        </tr>
    </thead>
    <tbody>
    @foreach( $multinacionals as $multinacional)
        <tr>
            <td>{{$multinacional->id}}</td>
            <td>{{$multinacional->Pais}}</td>
            <td>{{$multinacional->Nombre}}</td>
            <td>{{$multinacional->Direccion}}</td>
            <td>{{$multinacional->Telefono}}</td>
            <td>{{$multinacional->Correo}}</td>
            @can('editar')
            <td> 
            <a href="{{url('/multinacional/'.$multinacional->id.'/edit')}}" class="btn btn-warning" >Editar </a>
            
            <form action="{{ url('/multinacional/'.$multinacional->id) }}" class="d-inline" method="post" >
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
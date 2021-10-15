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



<div class="grid-item"><form action=" {{ url('/medio/create')}} "> <button id="btn-crear" class="linea" type="submit">Crear Nuevo</button></form></div>

</div>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            
        <th>Categoria</th>
            <th>Medio</th>
            <th>Fuente</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Telefono2</th>
            <th>Direccion</th>
            <th> .. </th>
           
         
        </tr>
    </thead>
    <tbody>
    @foreach( $medios as $medio)
        <tr>
            <td>{{$medio->Categoria}}</td>
            <td>{{$medio->Medio}}</td>
            <td>{{$medio->Fuente}}</td>
            <td>{{$medio->Nombre}}</td>
            <td>{{$medio->Correo}}</td>
            <td>{{$medio->Telefono}}</td>
            <td>{{$medio->Telefono2}}</td>
            <td>{{$medio->Direccion}}</td>

            @can('editar')
            <td> 
            <a href="{{ url('/medio/'.$medio->id.'/edit') }} " class="btn btn-warning">
                Editar
            </a> 
            </td>

            @endcan

        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection




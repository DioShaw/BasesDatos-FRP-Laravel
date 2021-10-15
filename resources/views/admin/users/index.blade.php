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
    <input type="text" id="busqueda" class="input" value="" name="" >
</div>

<div class="grid-item"> <button id="btn-buscar" class="linea" type="submit">Buscar</button></div>

<div class="grid-item"><form action="{{ url('/asocaja/create') }}"> <button id="btn-crear" class="linea" type="submit">Crear Nuevo</button></form></div>

</div>

<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
          
            <th>id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th> . </th>


        </tr>
    </thead>
    <tbody>
    @foreach( $users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
  
            <td> 
            
            <a href="{{route('admin.users.edit', $user) }} " class="btn btn-warning"> Editar </a>
       
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection

@extends('layouts.app')

@section('content')

<head>
<link href="{{ asset('css/menu.css') }}" rel = "stylesheet">
</head>



<div class="container">
                <h1 id="titulos"> Bases de datos disponibles </h1>

<div class="grid-container" id="tablero">

        <div class="grid-item">  <form action="{{url('/colegio/')}}"> <button id="btn-tablero" type="submit">Colegios</button></form> </div>
        <div class="grid-item">  <form action="{{url('/filbo_artista/')}}"> <button id="btn-tablero" type="submit">Artistas filbo</button></form> </div>
        <div class="grid-item">  <form action="{{url('/practicante/')}}"> <button id="btn-tablero" type="submit">Practicantes </button></form></div>
        <div class="grid-item">  <form action="{{url('/tallerista/')}}"> <button id="btn-tablero" type="submit">Talleristas </button></form></div>
        <div class="grid-item">  <form action="{{url('/editorial/')}}"> <button id="btn-tablero" type="submit">Editoriales </button></form></div>
        <div class="grid-item">  <form action="{{url('/asocaja/')}}"> <button id="btn-tablero" type="submit">Asocajas </button></form></div>
        <div class="grid-item">  <form action="{{url('/patrocinio/')}}"> <button id="btn-tablero" type="submit">Patrocinios </button></form></div>
        <div class="grid-item">  <form action="{{url('/multinacional/')}}"> <button id="btn-tablero" type="submit">Multinacionales </button></form></div>
        <div class="grid-item">  <form action="{{url('/teampombo/')}}"> <button id="btn-tablero" type="submit">Equipo Pombo </button></form></div>
        <div class="grid-item">  <form action="{{url('/medio/')}}"> <button id="btn-tablero" type="submit">Medios</button></form></div>
        <div class="grid-item">  <form action="{{url('/directivo/')}}"> <button id="btn-tablero" type="submit">Directivos</button></form></div>

</div>


<div id="construccion" >
<h1 id="titulos" > Bases de datos en Construccion: </h1>
<div class="grid-container" id="tablero">

        
        <div class="grid-item">  <form action="{{url('/editorial/')}}"> <button id="btn-tableroC" type="submit">Mercadeo </button></form></div>
        <div class="grid-item">  <form action="{{url('/asocaja/')}}"> <button id="btn-tableroC" type="submit">Otros </button></form></div>
        <div class="grid-item">  <form action="{{url('/')}}"> <button id="btn-tableroC" type="submit">Otros </button></form></div>
        <div class="grid-item">  <form action="{{url('/')}}"> <button id="btn-tableroC" type="submit">Otros </button></form></div>
        <div class="grid-item">  <form action="{{url('/')}}"> <button id="btn-tableroC" type="submit">Otros </button></form></div>
        <div class="grid-item">  <form action="{{url('/')}}"> <button id="btn-tableroC" type="submit">Otros </button></form></div>
        <div class="grid-item">  <form action="{{url('/')}}"> <button id="btn-tableroC" type="submit">Otros </button></form></div>
        <div class="grid-item">  <form action="{{url('/')}}"> <button id="btn-tableroC" type="submit">Otros </button></form></div>
        <div class="grid-item">  <form action="{{url('/')}}"> <button id="btn-tableroC" type="submit">Otros </button></form></div>
        <div class="grid-item">  <form action="{{url('/')}}"> <button id="btn-tableroC" type="submit">Otros </button></form></div>


</div>

</div>

</div>

@endsection

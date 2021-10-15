@extends('layouts.app')

@section('content')

<div class="container">

<div id="formulario-filbo_artista">
<form  action="{{ url('/filbo_artista') }}" method="post" enctype="multipart/form-data">
@csrf
@include('filbo_artista.form')
</form>
</div>

</div>
@endsection
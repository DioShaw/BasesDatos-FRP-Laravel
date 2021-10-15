@extends('layouts.app')

@section('content')

<div class="container">

<div id="formulario-patrocinio">
<form  action="{{ url('/patrocinio') }}" method="post" enctype="multipart/form-data">
@csrf
@include('patrocinio.form')
</form>
</div>

</div>
@endsection
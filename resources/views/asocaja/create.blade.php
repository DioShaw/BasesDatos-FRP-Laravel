@extends('layouts.app')
@section('content')
<div class="container">
<div id="formulario-asocaja">
<form  action="{{ url('/asocaja') }}" method="post" enctype="multipart/form-data">
@csrf
@include('asocaja.form')
</form>
</div>

</div>
@endsection
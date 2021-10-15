@extends('layouts.app')
@section('content')

<div class="container">

<div id="formulario-tallerista">
<form  action="{{ url('/tallerista') }}" method="post" enctype="multipart/form-data">
@csrf
@include('tallerista.form')
</form>
</div>

</div>
@endsection
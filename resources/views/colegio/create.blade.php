@extends('layouts.app')
@section('content')
<div class="container">
<div id="formulario-colegio">
<form  action="{{ url('/colegio') }}" method="post" enctype="multipart/form-data">
@csrf
@include('colegio.form')
</form>
</div>

</div>
@endsection
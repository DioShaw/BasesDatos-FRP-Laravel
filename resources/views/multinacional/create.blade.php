@extends('layouts.app')
@section('content')

<div class="container">
<div id="formulario-multinacional">
<form  action="{{ url('/multinacional') }}" method="post" enctype="multipart/form-data">
@csrf
@include('multinacional.form')
</form>
</div>
</div>
@endsection
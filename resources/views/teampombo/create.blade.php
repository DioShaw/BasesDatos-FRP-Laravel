@extends('layouts.app')
@section('content')
<div class="container">
<div id="formulario-teampombo">
<form  action="{{ url('/teampombo') }}" method="post" enctype="multipart/form-data">
@csrf
@include('teampombo.form')
</form>
</div>

</div>
@endsection
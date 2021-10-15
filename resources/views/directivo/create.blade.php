@extends('layouts.app')
@section('content')
<div class="container">
<div id="formulario-directivo">
<form  action="{{ url('/directivo') }}" method="post" enctype="multipart/form-data">
@csrf
@include('directivo.form')
</form>
</div>

</div>
@endsection
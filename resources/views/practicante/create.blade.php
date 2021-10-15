@extends('layouts.app')

@section('content')

<div class="container">

<div id="formulario-practicante">
<form  action="{{ url('/practicante') }}" method="post" enctype="multipart/form-data">
@csrf
@include('practicante.form')
</form>
</div>

</div>
@endsection
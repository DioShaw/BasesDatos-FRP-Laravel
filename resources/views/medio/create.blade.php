@extends('layouts.app')

@section('content')

<div class="container">

<div id="formulario-medio">
<form  action="{{ url('/medio') }}" method="post" enctype="multipart/form-data">
@csrf
@include('medio.form')
</form>
</div>

</div>
@endsection
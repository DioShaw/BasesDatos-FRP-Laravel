@extends('layouts.app')


@section('content')

<div class="container">

<div id="formulario-editorial">
<form  action="{{ url('/editorial') }}" method="post" enctype="multipart/form-data">
@csrf
@include('editorial.form')
</form>
</div>

</div>
@endsection
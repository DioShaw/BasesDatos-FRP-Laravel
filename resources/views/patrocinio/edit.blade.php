@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" action="{{url('/patrocinio/'.$patrocinio->id) }}">

@csrf

{{ method_field('PATCH') }}
    
@include('patrocinio.form')

</form>

</div>
@endsection

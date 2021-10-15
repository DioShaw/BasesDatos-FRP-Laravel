@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" action="{{url('/tallerista/'.$tallerista->id) }}">
@csrf
{{ method_field('PATCH') }}
@include('tallerista.form')
</form>
</div>
@endsection


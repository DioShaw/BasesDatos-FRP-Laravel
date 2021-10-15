@extends('layouts.app')
@section('content')
<div class="container">
<form method="post" action="{{url('/asocaja/'.$asocaja->id) }}">
@csrf
{{ method_field('PATCH') }}
@include('asocaja.form');
</form>
</div>
@endsection

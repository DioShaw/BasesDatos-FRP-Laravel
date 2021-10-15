@extends('layouts.app')
@section('content')
<div class="container">
<form method="post" action="{{url('/multinacional/'.$multinacional->id) }}">
@csrf
{{ method_field('PATCH') }}    
@include('multinacional.form')
</form>
</div>
@endsection

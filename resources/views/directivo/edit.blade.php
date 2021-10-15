@extends('layouts.app')
@section('content')
<div class="container">
<form method="post" action="{{url('/directivo/'.$directivo->id) }}">
@csrf
{{ method_field('PATCH') }}
@include('directivo.form')
</form>
</div>
@endsection

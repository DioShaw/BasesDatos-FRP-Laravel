@extends('layouts.app')
@section('content')
<div class="container">
<form method="post" action="{{url('/editorial/'.$editorial->id) }}">
@csrf
{{ method_field('PATCH') }}
@include('editorial.form')
</form>
</div>
@endsection

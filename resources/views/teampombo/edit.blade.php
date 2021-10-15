@extends('layouts.app')
@section('content')
<div class="container">
<form method="post" action="{{url('/teampombo/'.$teampombo->id) }}">
@csrf

{{ method_field('PATCH') }}
    
@include('teampombo.form')

</form>

</div>
@endsection
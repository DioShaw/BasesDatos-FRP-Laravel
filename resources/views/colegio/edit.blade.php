@extends('layouts.app')

@section('content')
<div class="container">


<form method="post" action="{{url('/colegio/'.$colegio->id) }}">
@csrf

{{ method_field('PATCH') }}
    
@include('colegio.form');

</form>

</div>
@endsection
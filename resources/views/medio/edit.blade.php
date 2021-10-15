@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" action="{{url('/medio/'.$medio->id) }}">

@csrf

{{ method_field('PATCH') }}
    
@include('medio.form')

</form>

</div>
@endsection

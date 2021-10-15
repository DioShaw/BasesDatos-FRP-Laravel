@extends('layouts.app')

@section('content')
<div class="container">


<form method="post" action="{{url('/practicante/'.$practicante->id) }}">

@csrf

{{ method_field('PATCH') }}
    
@include('practicante.form')

</form>

</div>
@endsection



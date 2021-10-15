@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" action="{{url('/filbo_artista/'.$filbo_artista->id) }}">

@csrf

{{ method_field('PATCH') }}
    
@include('filbo_artista.form')

</form>

</div>
@endsection

@extends('layouts.app')
@section('content')


@if (Session::has('info'))
<div class="alert alert-success ">
 <strong>{{ Session::get('info') }} </strong>

<span aria-hidden="true">&times;</span>
</button>
</div>
@endif


<div class="card" id="AsignarRoles">
    <div class="card-body">

    <p class ="h4">Nombre: </p>
    <p class= "form-control" >{{$user->name}}</p>


    <h2 class="h5"> Listado de roles </h2>
    {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

        @foreach ($roles as $role)

        <div>
            <label>
    {!! Form::checkbox('roles[]', $role-> id, null, ['class' => 'mr-1']) !!}
    {{ $role -> name }}
</label>

        </div>

        @endforeach


    {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary mt-2']) !!}

    {!! Form::close() !!}

</div>
</div>

@endsection
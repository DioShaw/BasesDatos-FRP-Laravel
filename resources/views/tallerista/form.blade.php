
@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
<ul>
     @foreach($errors->all() as $error)
   <li> {{ $error }} </li>
    @endforeach
    </ul>
</div>



@endif


<div class="form-group">

<label for="nombre"> Nombres:</label>
<input type="text" class="form-control"  name="nombres" value="{{ isset($tallerista->Nombres)? $tallerista->Nombres:''}}" id="nombres">
</div>

<label for="celular"> Celular:</label>
<input type="text" class="form-control"  name="telefono" value="{{ isset($tallerista->Telefono)?$tallerista->Telefono:''}}" id="telefono">
<br>
<label for="correo"> Correo:</label>
<input type="text" class="form-control"  name= "correo" value="{{ isset($tallerista->Correo)?$tallerista->Correo:''}}">
<br>
<label for="cargo"> Cargo:</label>
<input type="text" class="form-control"  name="cargo" value="{{ isset($tallerista -> Cargo)?$tallerista-> Cargo:''}}">

<br>

<input type="submit" class="btn btn-success" value="Enviar">
</div>


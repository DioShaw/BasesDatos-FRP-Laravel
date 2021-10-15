

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
<label for="nombre"> Editorial:</label>
<input type="text"class="form-control" name="nombre" value="{{ isset($editorial->Nombre)? $editorial->Nombre:''}}" id="nombre">
</div>

<div class="form-group">
<label for="Nit"> Nit:</label>
<input type="text" class="form-control" name="nit" value="{{ isset($editorial->Nit)?:''}}" id="nit">
</div>


<div class="form-group">

<label for="contacto"> Contacto:</label>
<input type="text" class="form-control" name= "contacto" value="{{ isset($editorial->Contacto)?$editorial->Contacto:''}}">


<label for="telefono"> telefono:</label>
<input type="text" class="form-control" name= "telefono" value= "{{ isset($editorial->Telefono)?$editorial->Telefono:''}}">

<label for="correo"> Correo:</label>
<input type="text" class="form-control" name="correo" value="{{ isset($editorial->Correo)?$editorial->Correo:''}}">

<label for="descuento"> Descuento:</label>
<input type="text" class="form-control" name="descuento" value = "{{ isset($editorial->Descuento)?$editorial->Descuento:''}}">

</div>

<input type="submit" class="btn btn-success" value="Enviar">


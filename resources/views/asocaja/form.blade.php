
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
<label for="nombre"> Caja de compensacion :</label>
<input type="text"class="form-control" name="nombre" value="{{ isset($asocaja->Nombre)? $asocaja->Nombre:''}}" id="nombre">
</div>

<div class="form-group">
<label for="Departamento"> Departamento:</label>
<input type="text" class="form-control" name= "departamento" value="{{ isset($asocaja->Departamento)?$asocaja->Departamento:''}}">
</div>


<label for="director"> director:</label>
<input type="text" class="form-control" name= "director" value="{{ isset($asocaja->Director)?$asocaja->Director:''}}">


<label for="telefono"> telefono:</label>
<input type="text" class="form-control" name= "telefono" value= "{{ isset($asocaja->Telefono)?$asocaja->Telefono:''}}">

<label for="direccion"> direccion:</label>
<input type="text" class="form-control" name="direccion" value = "{{ isset($asocaja->Direccion)?$asocaja->Direccion:''}}">

<label for="correo"> Correo:</label>
<input type="text" class="form-control" name="correo" value="{{ isset($asocaja->Correo)?$asocaja->Correo:''}}">
<br>

<input type="submit" class="btn btn-success" value="Enviar">
</div>







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
<input type="text" class="form-control"  name="nombres" value="{{ isset($practicante->nombres)? $practicante->nombres:''}}" id="nombres">
</div>



<label for="Nit"> Celular:</label>
<input type="text" class="form-control"  name="telefono" value="{{ isset($practicante->telefono)?$practicante->telefono:''}}" id="telefono">
<br>
<label for="director"> Correo:</label>
<input type="text" class="form-control"  name= "correo" value="{{ isset($practicante->correo)?$practicante->correo:''}}">
<br>
<label for="contacto"> Cargo:</label>
<input type="text" class="form-control"  name="cargo" value="{{ isset($practicante -> cargo)?$practicante-> cargo:''}}">
<br>
<label for="telefono"> Generacion:</label>
<input type="text" class="form-control"  name= "generacion" value= "{{ isset($Practicante->generacion)?$Practicante->generacion:''}}">
  <br>  
<label for="direccion"> Ingreso:</label>
<input type="text" class="form-control"  name="ingreso" value = "{{ isset($Practicante->direccion)?$Practicante->ingreso:''}}">
<br>  
<label for="estado"> Estado:</label>
<input type="text" class="form-control"  name="estado" value="{{ isset($Practicante->estado)?$Practicante->estado:''}}">
<br>  

<input type="submit" class="btn btn-success" value="Enviar">

</div>


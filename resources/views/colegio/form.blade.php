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
<label for="nombre"> Colegio:</label>
<input type="text"class="form-control" name="nombre" value="{{ isset($colegio->Nombre)? $colegio->Nombre:''}}" id="nombre">
</div>

<div class="form-group">
<label for="Nit"> Nit:</label>
<input type="text" class="form-control" name="nit" value="{{ isset($colegio->Nit)?:''}}" id="nit">
</div>

<div class="form-group">
<label for="calidad"> calidad:</label>
<select class="form-control" name="calidad" >
  <option value="..."></option>
  <option value="value2">Distrital</option>
  <option value="value3">Privado</option>
  <option value="value3">ICBF</option>
</select>
</div>


<div class="form-group">

<label for="director"> director:</label>
<input type="text" class="form-control" name= "director" value="{{ isset($colegio->Director)?$colegio->Director:''}}">

<label for="contacto"> Contacto:</label>
<input type="text" class="form-control" name="contacto" value="{{ isset($colegio-> Contacto)?$colegio-> Contacto:''}}">

<label for="telefono"> telefono:</label>
<input type="text" class="form-control" name= "telefono" value= "{{ isset($colegio->Telefono)?$colegio->Telefono:''}}">
  
<label for="direccion"> direccion:</label>
<input type="text" class="form-control" name="direccion" value = "{{ isset($colegio->direccion)?$colegio->direccion:''}}">
  
<label for="correo"> Correo:</label>
<input type="text" class="form-control" name="correo" value="{{ isset($colegio->correo)?$colegio->correo:''}}">
 
<label for="ciudad"> Ciudad:</label>
<input type="text" class="form-control" name="ciudad" value = "{{ isset($colegio->Ciudad)?$colegio->Ciudad:''}}">

</div>

<input type="submit" class="btn btn-success" value="Enviar">




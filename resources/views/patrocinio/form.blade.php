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

<label for="Empresa"> Empresa:</label>
<input type="text" class="form-control"  name="Empresa" value="{{ isset($patrocinio->Empresa)? $patrocinio->Empresa:''}}" id="Empresa">
</div>

<div class="form-group">

<label for="nombre"> Nombres:</label>
<input type="text" class="form-control"  name="Nombre" value="{{ isset($patrocinio->Nombre)? $patrocinio->Nombre:''}}" id="Nombre">
</div>

<label for="Cargo"> Cargo:</label>
<input type="text" class="form-control"  name="Cargo" value="{{ isset($patrocinio->Cargo)?$patrocinio->Cargo:''}}" id="Cargo">
<br>
<label for="Tema"> Tema:</label>
<input type="text" class="form-control"  name= "Tema" value="{{ isset($patrocinio->Tema)?$patrocinio->Tema:''}}">
<br>
<label for="Contacto"> Contacto:</label>
<input type="text" class="form-control"  name="Contacto" value="{{ isset($patrocinio -> Contacto)?$patrocinio-> Contacto:''}}">
<br>
<label for="Correo"> Correo:</label>
<input type="text" class="form-control"  name="Correo" value = "{{ isset($patrocinio->Correo)?$patrocinio->Correo:''}}">
<br> 
<label for="Telefono"> Telefono:</label>
<input type="text" class="form-control"  name= "Telefono" value= "{{ isset($patrocinio->Telefono)?$patrocinio->Telefono:''}}">
  <br>  
  <br> 
<label for="Direccion"> Direccion:</label>
<input type="text" class="form-control"  name= "Direccion" value= "{{ isset($patrocinio->Direccion)?$patrocinio->Direccion:''}}">
  <br>
  <br> 
<label for="Presentacion"> Presentacion:</label>
<input type="text" class="form-control"  name= "Presentacion" value= "{{ isset($patrocinio->Presentacion)?$patrocinio->Presentacion:''}}">
  <br> 


  <input type="submit" class="btn btn-success" value="Enviar">
</div>

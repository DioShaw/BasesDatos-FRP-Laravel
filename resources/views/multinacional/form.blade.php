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

<label for="Pais"> Pais:</label>
<input type="text" class="form-control"  name="Pais" value="{{ isset($multinacional->Pais)? $multinacional->Pais:''}}" id="Pais">
</div>

<div class="form-group">

<label for="nombre"> Nombre:</label>
<input type="text" class="form-control"  name="Nombre" value="{{ isset($multinacional->Nombre)? $multinacional->Nombre:''}}" id="Nombre">


<label for="Direccion"> Direccion:</label>
<input type="text" class="form-control"  name= "Direccion" value= "{{ isset($multinacional->Direccion)?$multinacional->Direccion:''}}">
<br>

<label for="Telefono"> Telefono:</label>
<input type="text" class="form-control"  name= "Telefono" value= "{{ isset($multinacional->Telefono)?$multinacional->Telefono:''}}">
  <br>  

<label for="Correo"> Correo:</label>
<input type="text" class="form-control"  name="Correo" value = "{{ isset($multinacional->Correo)?$multinacional->Correo:''}}">
<br> 

</div>




  <input type="submit" class="btn btn-success" value="Enviar">
</div>
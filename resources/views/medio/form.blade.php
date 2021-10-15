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

<label for="nombre"> Categoria:</label>
<input type="text" class="form-control"  name="Categoria" value="{{ isset($medio->Categoria)? $medio->Categoria:''}}" id="Categoria">
</div>

<label for="Medio"> Medio:</label>
<input type="text" class="form-control"  name="Medio" value="{{ isset($medio->Medio)?$medio->Medio:''}}" id="Medio">
<br>
<label for="director"> Fuente:</label>
<input type="text" class="form-control"  name= "Fuente" value="{{ isset($medio->Medio)?$medio->Fuente:''}}">
<br>
<label for="contacto"> Nombre:</label>
<input type="text" class="form-control"  name="Nombre" value="{{ isset($medio -> Nombre)?$medio-> Nombre:''}}">
<br>
<label for="direccion"> Correo:</label>
<input type="text" class="form-control"  name="correo" value = "{{ isset($medio->Correo)?$medio->Correo:''}}">
<br> 
<label for="telefono"> Telefono:</label>
<input type="text" class="form-control"  name= "telefono" value= "{{ isset($medio->Telefono)?$medio->Telefono:''}}">
  <br>  

  <label for="telefono"> Telefono2:</label>
<input type="text" class="form-control"  name= "telefono2" value= "{{ isset($medio->Telefono)?$medio->Telefono2:''}}">
  <br> 
 
  <label for="Direccion"> Direccion:</label>
<input type="text" class="form-control"  name= "Direccion" value= "{{ isset($medio->Direccion)?$medio->Direccion:''}}">
  <br> 

<br>  

<input type="submit" class="btn btn-success" value="Enviar">
</div>


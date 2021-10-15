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
<input type="text" class="form-control"  name="Nombre" value="{{ isset($filbo_artista->Nombre)? $filbo_artista->Nombre:''}}" id="Nombre">
</div>

<label for="Perfil"> Perfil:</label>
<input type="text" class="form-control"  name="perfil" value="{{ isset($filbo_artista->Perfil)?$filbo_artista->Perfil:''}}" id="Perfil">
<br>
<label for="director"> Organizacion:</label>
<input type="text" class="form-control"  name= "organizacion" value="{{ isset($filbo_artista->Organizavion)?$filbo_artista->Organizacion:''}}">
<br>
<label for="contacto"> Agenda:</label>
<input type="text" class="form-control"  name="agenda" value="{{ isset($filbo_artista -> Agenda)?$filbo_artista-> Agenda:''}}">
<br>
<label for="telefono"> Telefono:</label>
<input type="text" class="form-control"  name= "telefono" value= "{{ isset($filbo_artista->Telefono)?$filbo_artista->Telefono:''}}">
  <br>  
<label for="direccion"> Correo:</label>
<input type="text" class="form-control"  name="correo" value = "{{ isset($filbo_artista->Correo)?$filbo_artista->Correo:''}}">
<br>  
<br>  

<input type="submit" class="btn btn-success" value="Enviar">
</div>


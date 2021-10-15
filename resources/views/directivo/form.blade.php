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

<label for="Titulo"> Titulo:</label>
<input type="text"class="form-control" name="Titulo" value="{{ isset($directivo->Titulo)? $directivo->Titulo:''}}" id="Titulo">


<label for="nombre"> Nombre:</label>
<input type="text"class="form-control" name="Nombre" value="{{ isset($directivo->Nombre)? $directivo->Nombre:''}}" id="nombre">

<label for="nombre"> Apellido:</label>
<input type="text"class="form-control" name="Apellido" value="{{ isset($directivo->Apellido)? $directivo->Apellido:''}}" id="Apellido">

</div>

<div class="form-group">
<label for="ceddula"> Cedula:</label>
<input type="text" class="form-control" name="Ceddula" value="{{ isset($directivo->Ceddula)?  $directivo->Ceddula:''}}" id="Ceddula">


<label for="calidad"> calidad:</label>
<input type="text"class="form-control" name="Calidad" value="{{ isset($directivo->Calidad)? $directivo->Calidad:''}}" id="Calidad">


</div>


<div class="form-group">
<label for="calidad"> Estado:</label>
<select class="form-control" name="estado" >
  <option value="..."></option>
  <option value="value2">Activo</option>
  <option value="value3">Retirado</option>
  <option value="value3">Otro</option>
</select>
</div>


<div class="form-group">

<label for="Entidad"> Entidad:</label>
<input type="text" class="form-control" name= "entidad" value="{{ isset($directivo->Entidad)?$directivo->Entidad:''}}">

<label for="cargo"> Cargo:</label>
<input type="text" class="form-control" name="cargo" value="{{ isset($directivo-> Cargo)?$directivo-> Cargo:''}}">

<label for="telefono"> Celular:</label>
<input type="text" class="form-control" name= "celular" value= "{{ isset($directivo->Celular)?$directivo->Celular:''}}">

<label for="telefono"> telefono:</label>
<input type="text" class="form-control" name= "telefono" value= "{{ isset($directivo->Telefono)?$directivo->Telefono:''}}">
  
<label for="correo"> Correo:</label>
<input type="text" class="form-control" name="correo" value="{{ isset($directivo->Correo)?$directivo->Correo:''}}">
 
<label for="comentarios"> Comentarios:</label>
<input type="text" class="form-control" name="comentarios" value = "{{ isset($directivo->Comentarios)?$directivo->Comentarios:''}}">

</div>

<input type="submit" class="btn btn-success" value="Enviar">
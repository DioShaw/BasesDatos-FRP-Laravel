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
<label for="nombres"> Nombres:</label>
<input type="text"class="form-control" name="nombres" value="{{ isset($teampombo->Nombres)? $teampombo->Nombres:''}}" id="nombres">
</div>

<div class="form-group">
<label for="Apellidos"> Apellidos:</label>
<input type="text" class="form-control" name="Apellidos" value="{{ isset($teampombo->Apellidos)? :''}}" id="Apellidos">
</div>

<div class="form-group">

<label for="Celular"> Celular:</label>
<input type="text" class="form-control" name= "Celular" value="{{ isset($teampombo->Celular)?$teampombo->Celular:''}}">


<label for="correo"> Correo:</label>
<input type="text" class="form-control" name="Correo" value="{{ isset($teampombo->Correo)?$teampombo->Correo:''}}">

<label for="Cargo"> Cargo:</label>
<input type="text" class="form-control" name="Cargo" value = "{{ isset($teampombo->Cargo)?$teampombo->Cargo:''}}">

</div>

<input type="submit" class="btn btn-success" value="Enviar">
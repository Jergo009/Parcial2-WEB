

<div class="form-group">
 <label for="Nombre">Nombre</label>
  <input type="text" class="form-control" name="Nombre" value="{{ isset($producto->Nombre)?$producto->Nombre:old('Nombre')}}" id="Nombre">
</div>

<div class="form-group">
  <label for="Foto"></label>
  @if(isset($producto->Foto))
  <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$producto->Foto}}" width="100" alt ="">
  @endif
  <input type="file" class="form-control" name="Foto" value="" id="Foto">
</div>
    </br>
  <input class="btn btn-success" type="submit" value="guardar datos"> 

  <a class="btn btn-primary" href="{{url('/home')}}">Regresar</a>
  
  </br> 
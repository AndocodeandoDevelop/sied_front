@extends('layouts.layout')

@section('content')
<form>
    <center>
        <h1 class="alert-heading">Buzon!</h1>
    </center>
   
    <div class="form-group">
      <label for="exampleFormControlInput1">Titulo</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Titulo de la situacion">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descripcion</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Seleccione una prioridad</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Alta</option>
        <option>Media</option>
        <option>Baja</option>
      </select>
    </div>
    
    <center>
        <button type="submit" class="btn btn-primary">Mandar</button>
    </center>

    
  </form>
@endsection
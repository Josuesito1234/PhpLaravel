@extends('layouts.app')

@section('content')
   <form action="{{ route('docentes.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4">
           <label for="nombre" class="form-label">Nombre</label>
           <input type="text" class="form-control" id="nombre" name="nombre" required>
         </div>
    </div>
    <div class="row">
        <div class="col-md-4">
           <label for="apellido" class="form-label">Apellido</label>
           <input type="text" class="form-control" id="apellido" name="apellido" required>
         </div>
    </div>
    <div class="row">
        <div class="col-md-4">
           <label for="correo" class="form-label">Correo electronico</label>
           <input type="email" class="form-control" id="correo" name="correo" required>
         </div>
    </div>
    <div class="row">
        <div class="col-md-4">
           <label for="password" class="form-label">Contraseña</label>
           <input type="password" class="form-control" id="password" name="password" required>
         </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Crear</button>
          <a href="{{ route('docentes.index')}}" class="btn btn-secondary">Cancelar</a>
         </div>
    </div>
    </br>
   </form>
   
@endsection
@extends('layouts.app')

@section('content')
  <h1>Ver Docentes</h1>
    <div class="row">
        <div class="col-md-4">
           <label for="nombre" class="form-label">Nombre</label>
           <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $docente->Nombre }}"
                disabled>
         </div>
    </div>
    <div class="row">
        <div class="col-md-4">
           <label for="apellido" class="form-label">Apellido</label>
           <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $docente->Apellido }}"
           disabled>
         </div>
    </div>
    <div class="row">
        <div class="col-md-4">
           <label for="correo" class="form-label">Correo electronico</label>
           <input type="email" class="form-control" id="correo" name="correo" value="{{ $docente->Correo }}"
           disabled>
         </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('docentes.index') }}" class="btn btn-primary">Retornar</a>
         </div>
    </div>
@endsection
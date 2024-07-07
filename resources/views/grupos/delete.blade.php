@extends('layouts.app')

@section('content')
   <form action="{{ route('grupos.destroy', $grupo->id)}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4">
           <label for="nombre" class="form-label">Nombre</label>
           <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $grupo->Nombre }}" disabled></input>
         </div>
    </div>
    <div class="row">
        <div class="col-md-6">
           <label for="descripcion" class="form-label">Descripcion</label>
           <textarea class="form-control" id="descripcion" name="descripcion" disabled>{{ $grupo->Descripcion }}</textarea>
         </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Eliminar</button>
          <a href="{{ route('grupos.index')}}" class="btn btn-secondary">Cancelar</a>
         </div>
    </div>
    </br>
   </form>
   
@endsection
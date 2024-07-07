@extends('layouts.app')

@section('content')
    @if(session('success'))
    <div class="alert alert-success fade show" id="success-message" data-bs-dismiss="alert" role="alert">
        {{ session('success')}}
    </div>
    @endif
    <h1>Lista de los grupos de docentes</h1>

   <form action="{{ route('docentes_grupos.index') }}" method="GET">
    @csrf
    <div class="row">
      <div class="col-sm-4">
        <label for="docente_id" class="form-label">Nombre</label>
        <select name="docente_id" class="form-control" required>
              <option value="">Seleccione un docente</option>
              @foreach ($docentes as $docente)
                 <option value="{{ $docente->id }}"> {{ $docente->nombre }} {{ $docente->apellido }}</option>
              @endforeach
           </select>
       </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Buscar</button>
          <a href="{{ route('docentes_grupos.create') }}" class="btn btn-secondary">Ir a crear</a>
         </div>
    </div>
    </br>
   </form>
   <table class="table table-striped">
      <thead>
            <tr>
               <th>Docente</th>
               <th>Grupos</th>
               <th>Acciones</th>
           </tr>
      </thead>
      <tbody>
        @foreach ($docentes_grupos as $docente_grupo)
          <tr>
                <td>{{ $docente_grupo->docente->nombre }} {{ $docente_grupo->docente->apellido }}</td>
                <td>{{ $docente_grupo->grupo->nombre }}</td>
                <td>
                    <table>
                       <td>
                          <a href="{{ route('docentes_grupos.edit', $docente_grupo->id)}}" class="btn btn-warning">Editar</a>
                       </td>
                       <td>
                           <a href="{{ route('docentes_grupos.show', $docente_grupo->id)}}" class="btn btn-info">Ver</a>
                        </td>
                        <td>
                           <a href="{{ route('docentes_grupos.delete', $docente_grupo->id)}}"  class="btn btn-danger">Eliminar</a>
                         </td>
                </table>
            </td>
          </tr>
        @endforeach
      </tbody>
   </table>
   <div class="row">
       <div class="col-sm-12">
          {{ $docentes_grupos->links() }}
       </div>
   </div>
@endsection
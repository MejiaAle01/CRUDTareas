@extends('plantillas/plantilla')

@section('tituloPagina', 'Eliminar tarea')

@section('contenido')
    <section class="container-fluid">
        <div class="card">
            <h5 class="card-header">
                <a href="{{ route('tareas.index') }}" title="Regresar">
                    <i class="bi-arrow-left-circle-fill"></i>
                </a>
                Eliminar datos
            </h5>
            <div class="card-body">
                <p class="card-text">
                <div class="alert alert-danger">
                    ¿Está seguro de que desea eliminar este registro?
                    <p>
                        <span> Titulo: <b>{{ $tareas->tituloTarea }}</b></span>
                        <br>
                        <span> Descripción: <b>{{ $tareas->descripcionTarea }}</b></span>
                        <br>
                        <span> Tipo: <b>{{ $tareas->tipoTarea }}</b></span>
                        <br>
                        <span> Estado: <b>{{ $tareas->estadoTarea }}</b></span>
                    </p>
                </div>
                </p>
                <form action="{{ route('tareas.destroy', $tareas->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@extends('plantillas/plantilla')

@section('tituloPagina', 'Eliminar tarea')

@section('contenido')
    <section class="container-fluid">
        <div class="card">
            <h5 class="card-header"> Eliminar datos </h5>
            <div class="card-body">
                <p class="card-text">
                <div class="alert alert-danger">
                    ¿Está seguro de que desea eliminar este registro?
                    <p>
                        <span> Titulo: <b>{{ $tarea->tituloTarea }}</b></span>
                        <span> Descripción: <b>{{ $tarea->descripcionTarea }}</b></span>
                        <span> Tipo: <b>{{ $tarea->tipoTarea }}</b></span>
                        <span> Estado: <b>{{ $tarea->estadoTarea }}</b></span>
                    </p>
                </div>
                </p>
                <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Eliminar </button>
                </form>
            </div>
        </div>
    </section>
@endsection

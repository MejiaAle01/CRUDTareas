@extends('plantillas/plantilla')

@section('tituloPagina', 'Editar tarea')

@section('contenido')
    <section class="container min-vh-100 d-flex justify-content-center align-items-center">
        <form action="{{ route('tareas.update', $tareas->id) }}" method="POST"
            class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <h5 align="center">
                <a href="{{ route('tareas.index') }}" title="Regresar">
                    <i class="bi-arrow-left-circle-fill"></i>
                </a>
                Actualizar datos
            </h5>
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">
                    Titulo
                    <input type="text" class="form-control" name="tituloTarea" required
                        value="{{ $tareas->tituloTarea }} ">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Descripción
                    <input type="text" class="form-control" name="descripcionTarea"
                        value="{{ $tareas->descripcionTarea }}" required>
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Tipo
                    <input type="text" class="form-control" name="tipoTarea" required value="{{ $tareas->tipoTarea }}">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Estado
                    <input type="text" class="form-control" name="estadoTarea" required
                        value="{{ $tareas->estadoTarea }}">
                </label>
            </div>
            <button type="submit" class="btn btn-primary"> Agregar </button>
        </form>
    </section>
@endsection

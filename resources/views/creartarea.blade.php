@extends('plantillas/plantilla')

@section('tituloPagina', 'Crear nuevo registro')

@section('contenido')
    <section class="container min-vh-100 d-flex justify-content-center align-items-center">
        <form action="{{ route('tareas.store') }}" method="POST" class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <h5 align="center">
                <a href="{{ route('tareas.index') }}" title="Regresar">
                    <i class="bi-arrow-left-circle-fill"></i>
                </a>
                Nueva tarea
            </h5>
            <hr>
            @csrf
            <div class="mb-3">
                <label class="form-label">
                    Titulo
                    <input type="text" class="form-control" name="tituloTarea" required>
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Descripción
                    <textarea name="descripcionTarea" class="form-control" rows="3" required></textarea>
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Tipo
                    <input type="text" class="form-control" name="tipoTarea" required>
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Estado
                    <input type="text" class="form-control" name="estadoTarea" required>
                </label>
            </div>
            <button type="submit" class="btn btn-primary"> Crear </button>
        </form>
    </section>
@endsection

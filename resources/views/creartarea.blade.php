@extends('plantillas/plantilla')

@section('tituloPagina', 'Crear nuevo registro')

@section('contenido')
    <section class="container">
        <div class="card mb-3" style="width: 18rem;">
            <div class="row g-0">
                <div class="col-md-8">
                    <h5 class="card-header"> Agregar nueva tarea </h5>
                    <div class="card-body">
                        <p class="card-text">
                        <form action="{{ route('tareas.store') }}" method="POST">
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
                                    <input type="text" class="form-control" name="descripcionTarea" required>
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
                        </form>
                        </p>
                        <button type="submit" class="btn btn-primary"> Agregar </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

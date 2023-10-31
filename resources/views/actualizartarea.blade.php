@extends('plantillas/plantilla')

@section('tituloPagina', 'Editar tarea')

@section('contenido')
    <section class="container">
        <div class="card mb-3" style="width: 18rem;">
            <div class="row g-0">
                <div class="col-md-8">
                    <h5 class="card-header"> Editar tarea </h5>
                    <div class="card-body">
                        <p class="card-text">
                        <form action="{{ route('tareas.update', $tarea->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">
                                    Titulo
                                    <input type="text" class="@error('tituloTarea') is-invalid @enderror form-control"
                                        name="tituloTarea" required value="{{ $tarea->tituloTarea }} ">

                                    @error('tituloTarea')
                                        <div class="alert alert-danger"> {{ $message }} </div>
                                    @enderror
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Descripción
                                    <input type="text"
                                        class="@error('descripcionTarea') is-invalid @enderror form-control"
                                        name="descripcionTarea" required value="{{ $tarea->descripcionTarea }}">

                                    @error('descripcionTarea')
                                        <div class="alert alert-danger"> {{ $message }} </div>
                                    @enderror
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Tipo
                                    <input type="text" class="@error('tipoTarea') is-invalid @enderror form-control"
                                        name="tipoTarea" required value="{{ $tarea->tipoTarea }}">

                                    @error('tipoTarea')
                                        <div class="alert alert-danger"> {{ $message }} </div>
                                    @enderror
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Estado
                                    <input type="text" class="@error('estadoTarea') is-invalid @enderror form-control"
                                        name="estadoTarea" required value="{{ $tarea->estadoTarea }}">

                                    @error('estadoTarea')
                                        <div class="alert alert-danger"> {{ $message }} </div>
                                    @enderror
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

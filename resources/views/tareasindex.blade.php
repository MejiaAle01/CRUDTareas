@extends('plantillas/plantilla')

@section('titutoPagina', 'Dashboard Tareas')

@section('contenido')
    <div class="container">
        <br>
        <div class="card">
            <h5 class="card-header"> Tareas </h5>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <p>
                    <a href="{{ route('tareas.create') }}" class="btn btn-primary"> Agregar Tarea <i class="bi bi-plus-circle-fill"></i></a>
                </p>
                <hr>
                <div class="table-responsive xxl">
                    <table class="table table-striped table-hover caption-top">
                        <caption> Listado de tareas </caption>
                        <thead>
                            <tr>
                                <th> Titulo </th>
                                <th> Descripción </th>
                                <th> Tipo </th>
                                <th> Estado </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $tarea)
                                <tr>
                                    <td> {{ $tarea->tituloTarea }} </td>
                                    <td> {{ $tarea->descripcionTarea }} </td>
                                    <td> {{ $tarea->tipoTarea }} </td>
                                    <td> {{ $tarea->estadoTarea }} </td>
                                    <td>
                                        <a href="{{ route('tareas.edit', encrypt($tarea->id)) }}" class="btn btn-success">
                                            <i class="bi-pencil-square"></i>
                                        </a>
                                        <a href="{{ route('tareas.show', encrypt($tarea->id)) }}" class="btn btn-danger">
                                            <i class="bi-trash3"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

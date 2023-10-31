@extends('plantillas/plantilla')

@section('titutoPagina', 'Dashboard Tareas')

@section('contenido')
    <div class="container">
        <br>
        <div class="card">
            <h5 class="card-header"> Tareas </h5>
            <div class="card-body">
                <p>
                    <a href="{{ route('tareas.create') }}" class="btn btn-primary"> Agregar Tarea </a>
                </p>
                <hr>
                <div class="table-responsive xxl">
                    <table class="table">
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
                                    <td> {{ $tarea->titutoTarea }} </td>
                                    <td> {{ $tarea->descripcionTarea }} </td>
                                    <td> {{ $tarea->tipoTarea }} </td>
                                    <td> {{ $tarea->estadoTarea }} </td>
                                    <td>
                                        <a href="" class="btn btn-success">
                                            <i class="bi-pencil-square"></i>
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <i class="bi-trash3"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <nav>
                    <ul class="pagination">
                        <li class="page-item"></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

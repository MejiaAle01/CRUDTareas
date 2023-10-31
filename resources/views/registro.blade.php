@extends('plantillas/formularioPlantilla')

@section('tituloPagina', 'Crear cuenta')

@section('contenido')
    <section>
        <div class="container min-vh-100 d-flex justify-content-center align-items-center">
            <form action=" {{ route('usuarios.store') }}" method="POST" class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <h5 align="center"> Crea tu cuenta </h5>
                @csrf
                <div class="mb-3">
                    <label>
                        Nombre
                        <input type="text" class="@error('nombre') is invalid @enderror form-control" name="nombre"
                            required>

                        @error('nombre')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </label>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Apellido
                        <input type="text" class="@error('apellido') is-invalid @enderror form-control" name="apellido"
                            required>

                        @error('apellido')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </label>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Usuario
                        <input type="text" class="@error('usuario') is-invalid @enderror form-control" name="usuario"
                            required>

                        @error('usuario')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </label>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Contraseña
                        <input type="password" class="@error('password') is-invalid @enderror form-control" name="password"
                            required>

                        @error('password')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </label>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary"> Registrarse </button>
                </div>
            </form>
        </div>
    </section>
@endsection

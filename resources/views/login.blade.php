@extends('plantillas/formularioPlantilla')

@section('tituloPagina', 'Iniciar Sesión')

@section('contenido')
    <section>
        <div class="container min-vh-100 d-flex justify-content-center align-items-center">
            <form action="{{ route('tareas.index') }}" method="GET" class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <section>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </section>
                <h5 align="center"> Iniciar Sesión </h5>
                @csrf
                <div class="mb-3">
                    <label>
                        Usuario
                        <input type="text" class="@error('usuario') is invalid @enderror form-control" name="usuario"
                            required>

                        @error('usuario')
                            <div class="alert alert-danger"> </div>
                        @enderror
                    </label>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Contraseña
                        <input type="password" class="@error('password') is-invalid @enderror form-control" name="password"
                            required>

                        @error('password')
                            <div class="alert alert-danger"></div>
                        @enderror
                    </label>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary"> Iniciar Sesión </button>
                </div>
                <br>
                No tienes cuenta?, <a href="{{ route('usuarios.registro') }}"
                    class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    Crear cuenta </a>
            </form>
        </div>
    </section>
@endsection

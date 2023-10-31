@extends('plantillas/formularioPlantilla')

@section('tituloPagina', 'Iniciar Sesión')

@section('contenido')
    <section>
        <div class="container">
            <div class="card m-3" style="max-width: 540px;">
                <div class="row">
                    <div class="col-md-8">
                        <h5 class="card-header"> Iniciar Sesión </h5>
                        <div class="card-body">
                            <p class="card-text">
                            <form action="" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">
                                        Usuario
                                        <input type="text" class="@error('usuario') is-invalid @enderror form-control"
                                            name="usuario" required>

                                        @error('usuario')
                                            <div class="alert alert-danger"> </div>
                                        @enderror
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Contraseña
                                        <input type="password" class="@error('password') is-invalid @enderror form-control"
                                            name="password" required>

                                        @error('password')
                                            <div class="alert alert-danger"></div>
                                        @enderror
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary"> Iniciar Sesión </button>
                                <a href="" class="btn btn-outline-secondary"> Registrarse </a>
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

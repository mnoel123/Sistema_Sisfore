@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Cliente</title>
        <!-- Agregar enlaces a los archivos CSS de Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <main class="mt-3">
              <form action="{{ route('Usuarios.update', $usuario[0]['id']) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $usuario[0]['id'] }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $usuario[0]['name'] }}">
                    </div>

                    <div class="mb-3">
    <label for="estado" class="form-label">Estado</label>
    <select class="form-select" id="estado" name="estado">
        <option value="activo" {{ $usuario[0]['estado'] == 'activo' ? 'selected' : '' }}>activo</option>
        <option value="inactivo" {{ $usuario[0]['estado'] == 'inactivo' ? 'selected' : '' }}>inactivo</option>
        <option value="nuevo" {{ $usuario[0]['estado'] == 'nuevo' ? 'selected' : '' }}>nuevo</option>
    </select>
</div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $usuario[0]['email'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password"
                            value="">

                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <a href="{{ route('Usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </main>
        </div>

        <!-- Agregar enlaces a los archivos JS de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
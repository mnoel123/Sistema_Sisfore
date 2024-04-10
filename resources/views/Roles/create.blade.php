@extends('adminlte::page')

@section('title', 'Asignar role')

@section('content_header')
<h1>Asignar Rol</h1>
@stop

@section('content')
   <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Cliente</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">


        <main class="mt-3">
            <form action="{{ route('Roles.store') }}" method="POST">
                @csrf
                 <div class="mb-3">
                    <label for="role_id" class="form-label">Elegir Rol</label>
                    <select class="form-control" id="role_id" name="role_id" required>
                        <option value="" selected disabled>Seleccionar Rol</option>
                        @foreach ($rol as $roll)
                        <option value="{{ $roll['id'] }}">
                            {{ $roll['id'] }}- {{ $roll['name'] }}
                        </option>
                        @endforeach
                    </select>


                 <div class="mb-3">
                    <label for="model_id" class="form-label">Elegir usuario</label>
                    <select class="form-control" id="model_id" name="model_id" required>
                        <option value="" selected disabled>Seleccionar Usuario</option>
                        @foreach ($roles as $role)
                        <option value="{{ $role['id'] }}">
                            {{ $role['id'] }}- {{ $role['name'] }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Asignar rol</button>
                <a href="{{ route('Roles.index') }}" class="btn btn-secondary">Cancelar</a>
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
    <script> console.log('Hi!'); </script>
@stop
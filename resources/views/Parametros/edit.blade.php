@extends('adminlte::page')
@section('title', 'Editar Parametro')
@section('content_header')
<h1>Editar Parametro</h1>
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
                <form action="{{ route('Parametros.update', $parametros[0]['id']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $parametros[0]['id'] }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="parametro" class="form-label">Parametro</label>
                        <input type="text" class="form-control" id="parametro" name="parametro" value="{{ $parametros[0]['parametro'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="valor" class="form-label">Valor</label>
                        <input type="text" class="form-control" id="valor" name="valor" value="{{ $parametros[0]['valor'] }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('Parametros.index') }}" class="btn btn-secondary">Cancelar</a>
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
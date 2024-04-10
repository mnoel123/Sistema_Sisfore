@extends('adminlte::page')

@section('title', 'Crear Pregunta')

@section('content_header')

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
            <form action="{{ route('Preguntas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="pregunta" class="form-label">Haz una Pregunta</label>
                    <input type="text" class="form-control" id="pregunta" name="pregunta">
                </div>
               
                <button type="submit" class="btn btn-primary">Crear Pregunta</button>
                
                <a href="{{ route('Preguntas.index') }}" class="btn btn-secondary">Cancelar</a>
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
@extends('adminlte::page')
@section('title', 'Agregar persona')
@section('content_header')
<h1>Agregar persona</h1>
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
                <form action="{{ route('Persona.store') }}" method="POST">
                    @csrf
                     <hr />
                    <div class="row">
                        <div class="col">

                            <!-- Numero de identidad input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="num_identidad" class="form-control" name="num_identidad">
                                <label class="form-label" for="num_identidad">Número de identidad</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Nombre input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="nom_persona" class="form-control" name="nom_persona">
                                <label class="form-label" for="nom_persona">Nombre</label>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col">
                            <!-- Apellido input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="ape_persona" class="form-control" name="ape_persona">
                                <label class="form-label" for="ape_persona">Apellido</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Sexo input -->
                            <div data-mdb-input-init class="form-outline">
                                <select class="form-select" id="sex_persona" name="sex_persona">
                                    <option value="MASCULINO">Masculino</option>
                                    <option value="FEMENINO">Femenino</option>
                                </select>
                                <label class="form-label" for="sex_persona">Sexo</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Fecha de nacimiento input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="date" id="fec_nacimiento" class="form-control" name="fec_nacimiento">
                                <label class="form-label" for="fec_nacimiento">Fecha de nacimiento</label>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col">
                            <!-- Estado input -->
                            <div data-mdb-input-init class="form-outline">
                                <select class="form-select" id="tip_estado" name="tip_estado">
                                    <option value="ACTIVO">Activo</option>
                                    <option value="INACTIVO">Inactivo</option>
                                </select>
                                <label class="form-label" for="tip_estado">Estado</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Estado civil input -->
                            <div data-mdb-input-init class="form-outline">
                                <select class="form-select" id="estado_civil" name="estado_civil">
                                    <option value="CASADO">Casado</option>
                                    <option value="SOLTERO">Soltero</option>
                                    <option value="UNION LIBRE">Unión Libre</option>
                                </select>
                                <label class="form-label" for="estado_civil">Estado Civil</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Correo electrónico input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="email" id="email" class="form-control" name="email">
                                <label class="form-label" for="email">Correo Electrónico</label>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col">
                            <!-- Usuario de registro input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="usr_registro" class="form-control" name="usr_registro" value="{{ Auth::id() }}" readonly>
                                <label class="form-label" for="usr_registro">Usuario de Registro</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Fecha de registro input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="fec_registro" class="form-control" name="fec_registro" value="{{ date('Y-m-d H:i:s') }}" readonly>
                                <label class="form-label" for="fec_registro">Fecha de Registro</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear Persona</button>
                    <a href="{{ route('Persona.index') }}" class="btn btn-secondary">Cancelar</a>
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
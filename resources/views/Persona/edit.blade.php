@extends('adminlte::page')
@section('title', 'Editar persona')
@section('content_header')
<h1>Editar Persona</h1>
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
                <form action="{{ route('Persona.update', $persona[0]['COD_PERSONA']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col">
                            <!-- Numero de identidad input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="numer" id="COD_PERSONA" class="form-control" readonly name="COD_PERSONA" value="{{ $persona[0]['COD_PERSONA'] }}">
                                <label class="form-label" for="id">ID</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Numero de identidad input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="num_identidad" class="form-control" name="num_identidad" value="{{ $persona[0]['NUM_IDENTIDAD'] }}">
                                <label class="form-label" for="num_identidad">Número de identidad</label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Nombre input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="nom_persona" class="form-control" name="nom_persona" value="{{ $persona[0]['NOM_PERSONA'] }}">
                                <label class="form-label" for="nom_persona">Nombre</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Apellido input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="ape_persona" class="form-control" name="ape_persona" value="{{ $persona[0]['APE_PERSONA'] }}">
                                <label class="form-label" for="ape_persona">Apellido</label>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col">
                            <!-- Sexo input -->
                            <div data-mdb-input-init class="form-outline">
                                <select class="form-select" id="sex_persona" name="sex_persona">
                                    <option value="MASCULINO" @if($persona[0]['SEX_PERSONA'] === 'MASCULINO') selected @endif>Masculino</option>
                                    <option value="FEMENINO" @if($persona[0]['SEX_PERSONA'] === 'FEMENINO') selected @endif>Femenino</option>
                                </select>
                                <label class="form-label" for="sex_persona">Sexo</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Fecha de nacimiento input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="date" id="fec_nacimiento" class="form-control" name="fec_nacimiento" value="{{ \Carbon\Carbon::parse($persona[0]['FEC_NACIMIENTO'])->format('Y-m-d') }}">
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
                                    <option value="ACTIVO" @if($persona[0]['TIP_ESTADO'] === 'ACTIVO') selected @endif>ACTIVO</option>
                                    <option value="INACTIVO" @if($persona[0]['TIP_ESTADO'] === 'INACTIVO') selected @endif>INACTIVO</option>
                                </select>
                                <label class="form-label" for="tip_estado">Estado</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Estado civil input -->
                            <div data-mdb-input-init class="form-outline">
                                <select class="form-select" id="estado_civil" name="estado_civil">
                                    <option value="CASADO" @if($persona[0]['ESTADO_CIVIL'] === 'CASADO') selected @endif>CASADO</option>
                                    <option value="SOLTERO" @if($persona[0]['ESTADO_CIVIL'] === 'SOLTERO') selected @endif>SOLTERO</option>
                                    <option value="UNION LIBRE" @if($persona[0]['ESTADO_CIVIL'] === 'UNION LIBRE') selected @endif>UNION LIBRE</option>
                                </select>
                                <label class="form-label" for="estado_civil">Estado Civil</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Correo electrónico input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="email" id="email" class="form-control" name="email" value="{{ $persona[0]['EMAIL'] }}">
                                <label class="form-label" for="email">Correo Electrónico</label>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col">
                            <!-- Usuario de registro input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="usr_registro" class="form-control" name="usr_registro" value="{{ $persona[0]['USR_REGISTRO'] }}" readonly>
                                <label class="form-label" for="usr_registro">Usuario de Registro</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Fecha de registro input -->
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="fec_registro" class="form-control" name="fec_registro" value="{{ $persona[0]['FEC_REGISTRO'] }}" readonly>
                                <label class="form-label" for="fec_registro">Fecha de Registro</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Persona</button>
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
@stop
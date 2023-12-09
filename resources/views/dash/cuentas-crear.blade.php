<div class="modal fade" id="Modal-create-{{('cuentas')}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="{{url('cuentas')}}" method="post" class="was-validated">
                        @csrf
                        <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nueva Cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="col-md-12" novalidate>
            <div class="card card-primary">
                <div class="card-header " style="background-color: #8B1E06 !important;>
                    <h3 class="card-title"> Ingrese una nueva Cuenta</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                            <label for="OPERACION">OPERACION</label>
                                <input type="text" class="form-control" id="OPERACION" name="OPERACION" value="I" readonly placeholder="Insertar">
                                <div class="valid-feedback">DATO VALIDO.</div>
                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                                @error('OPERACION')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="COD_CTA_MAYORES">CUENTAS MAYORES</label>
                                <input type="text" class="form-control" id="COD_CTA_MAYORES" name="COD_CTA_MAYORES" placeholder="Valores de 1 a 4" value="{{old('COD_CTA_MAYORES')}}" required>
                                <div class="valid-feedback">DATO VALIDO.</div>
                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMEROS</div>
                                @error('COD_CTA_MAYORES')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NUM_SUBCUENTA">VALOR DE LA SUBCUENTA</label>
                                <input type="text" class="form-control" id="NUM_SUBCUENTA" name="NUM_SUBCUENTA" placeholder="" value="{{old('NUM_SUBCUENTA')}}" required>
                                <div class="valid-feedback">DATO VALIDO.</div>
                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMEROS</div>
                                @error('NUM_SUBCUENTA')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="MOVIMIENTO">MOVIMIENTO</label>
                                <input type="text" class="form-control" id="MOVIMIENTO" name="MOVIMIENTO" placeholder="" value="{{old('MOVIMIENTO')}}" required>
                                <div class="valid-feedback">DATO VALIDO.</div>
                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMEROS</div>
                                @error('MOVIMIENTO')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="TIP_CUENTA">TIPO DE CUENTA</label>
                                <input type="text" class="form-control" id="TIP_CUENTA" name="TIP_CUENTA" placeholder="" value="{{ old('TIP_CUENTA') }}" required>
                                <div class="valid-feedback">DATO VALIDO.</div>
                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA UN NUMERO(ENTRE 1 Y 4) O PUEDE ESCRIBIRLO</div>
                                @error('TIP_CUENTA')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="NOM_SUBCUENTA">NOMBRE DE LA SUBCUENTA</label>
                                <input type="text" class="form-control" id="NOM_SUBCUENTA" name="NOM_SUBCUENTA" placeholder="" value="{{ old('NOM_SUBCUENTA') }}" required>
                                <div class="valid-feedback">DATO VALIDO.</div>
                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO UNA LETRA (ENTRE I, U, E)</div>
                                @error('NOM_SUBCUENTA')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                            <label for="USR_REGISTRO">REGISTRADO POR:</label>
                                <input type="text" class="form-control" id="USR_REGISTRO" name="USR_REGISTRO" value="1" readonly placeholder="Administrador">
                                @error('USR_REGISTRO')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-danger" href="{{url('cuentas') }}">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>


@section('js')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Puedes agregar scripts personalizados aquí si es necesario
    </script>
@stop


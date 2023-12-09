<!-- Modal -->
<div class="modal fade" id="Modal-create-{{('planillas')}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="{{url('planillas')}}" method="post" class="was-validated">
            @csrf
            <div class="modal-content">
                <div class="modal-header" style="background-color: #8B1E06 !important;">
                    <h5 class="modal-title" id="exampleModalLongTitle">Nueva Planilla</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12" novalidate>
                        <div class="card card-primary">
                            <div class="card-header " style="background-color: #8B1E06 !important;">
                                <h3 class="card-title"> Ingrese Su Nueva Planilla</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <!-- OPERACION -->
                                        <div class="form-group">
                                            <label for="OPERACION">OPERACION</label>
                                            <select class="form-control" id="OPERACION" name="OPERACION" required>
                                                <option value="I" {{ old('OPERACION') == 'I' ? 'selected' : '' }}>Insertar</option>
                                                <option value="U" {{ old('OPERACION') == 'U' ? 'selected' : '' }}>Actualizar</option>
                                            </select>
                                            <div class="valid-feedback">DATO VALIDO.</div>
                                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                                            @error('OPERACION')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- CODIGO AFILIADO -->
                                        <div class="form-group">
                                            <label for="COD_AFILIADO">CODIGO AFILIADO</label>
                                            <input type="text" class="form-control" id="COD_AFILIADO" name="COD_AFILIADO" placeholder="" value="{{ old('COD_AFILIADO') }}" required>
                                            <div class="valid-feedback">DATO VALIDO.</div>
                                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMEROS</div>
                                            @error('COD_AFILIADO')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <!-- NUMERO AFILIADO -->
                                        <div class="form-group">
                                            <label for="NUM_AFILIADO">NUMERO AFILIADO</label>
                                            <input type="text" class="form-control" id="NUM_AFILIADO" name="NUM_AFILIADO" placeholder="" value="{{ old('NUM_AFILIADO') }}" required>
                                            <div class="valid-feedback">DATO VALIDO.</div>
                                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMEROS</div>
                                            @error('COD_AFILIADO')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- NOMBRE COMPLETO -->
                                        <div class="form-group">
                                            <label for="NOM_COMPLETO">NOMBRE COMPLETO</label>
                                            <input type="text" class="form-control" id="NOM_COMPLETO" name="NOM_COMPLETO" placeholder="" value="{{ old('NOM_COMPLETO') }}" required>
                                            <div class="valid-feedback">DATO VALIDO.</div>
                                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                                            @error('DENOMINACION')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <!-- FECHA DE PAGO -->
                                        <div class="form-group">
                                            <label for="FEC_PAGO">FECHA DE PAGO</label>
                                            <input type="date" class="form-control" id="FEC_PAGO" name="FEC_PAGO" placeholder="" value="{{ old('FEC_PAGO') }}" required>
                                            <div class="valid-feedback">DATO VALIDO.</div>
                                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. SELECCIONE UNA FECHA VALIDA</div>
                                            @error('FEC_PAGO')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- DENOMINACION -->
                                        <div class="form-group">
                                            <label for="DENOMINACION">DENOMINACION</label>
                                            <input type="text" class="form-control" id="DENOMINACION" name="DENOMINACION" placeholder="" value="{{ old('DENOMINACION') }}" required>
                                            <div class="valid-feedback">DATO VALIDO.</div>
                                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                                            @error('DENOMINACION')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <!-- VALOR PAGADO -->
                                        <div class="form-group">
                                            <label for="VAL_PAGADO">VALOR PAGADO</label>
                                            <input type="text" class="form-control" id="VAL_PAGADO" name="VAL_PAGADO" placeholder="" value="{{ old('VAL_PAGADO') }}" required>
                                            <div class="valid-feedback">DATO VALIDO.</div>
                                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMERO</div>
                                            @error('VAL_PAGADO')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <!-- VALOR APORTACION MENSUAL -->
                                        <div class="form-group">
                                            <label for="VAL_APO_MENSUAL">VALOR APORTACION MENSUAL</label>
                                            <input class="form-control" rows="3" name="VAL_APO_MENSUAL" id="VAL_APO_MENSUAL" placeholder="" value="{{ old('VAL_APO_MENSUAL') }}" required>
                                            <div class="valid-feedback">DATO VALIDO.</div>
                                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMERO</div>
                                            @error('VAL_APO_MENSUAL')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <!-- USUARIO REGISTRO -->
                                        <div class="form-group">
                                            <label for="USR_REGISTRO">USUARIO REGISTRO</label>
                                            <input type="text" class="form-control" id="USR_REGISTRO" name="USR_REGISTRO" placeholder="" value="{{ old('USR_REGISTRO') }}" required>
                                            <div class="valid-feedback">DATO VALIDO.</div>
                                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                            @error('USR_REGISTRO')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <a class="btn btn-danger" href="{{ url('planillas') }}">Regresar</a>
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Puedes agregar scripts personalizados aquí si es necesario
    </script>
@stop

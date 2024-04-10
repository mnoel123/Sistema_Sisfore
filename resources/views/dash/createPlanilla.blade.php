

<!-- Modal -->
<div class="modal fade" id="Modal-create-planillas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="{{ route('planillas') }}" method="post" class="was-validated">
            @csrf
            <div class="modal-content">
                <div class="modal-header" style="background-color: #8B1E06 !important;">
                <h5 class="modal-title text-white text-center" id="exampleModalLongTitle">Ingrese su nueva planilla</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12" novalidate>
                    <div class="modal-body">
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
                                            <input type="text" class="form-control" id="COD_AFILIADO" name="COD_AFILIADO" placeholder="" value="{{ old('COD_AFILIADO') }}" required data-solo-numeros>
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
                                            <input type="text" class="form-control" id="NUM_AFILIADO" name="NUM_AFILIADO" placeholder="" value="{{ old('NUM_AFILIADO') }}" maxlength="8" required data-solo-numeros>
                                            <div class="valid-feedback">DATO VALIDO.</div>
                                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMEROS</div>
                                            @error('NUM_AFILIADO')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- NOMBRE COMPLETO -->
                                        <div class="form-group">
                                            <label for="NOM_COMPLETO">NOMBRE COMPLETO</label>
                                            <input type="text" class="form-control" id="NOM_COMPLETO" name="NOM_COMPLETO" placeholder="" value="{{ old('NOM_COMPLETO') }}" maxlength="100" required data-solo-letras>
                                            <div class="valid-feedback">DATO VALIDO.</div>
                                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                                            @error('NOM_COMPLETO')
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
                                            <input type="text" class="form-control" id="DENOMINACION" name="DENOMINACION" placeholder="" value="{{ old('DENOMINACION') }}" maxlength="100" required >
                                            <div class="valid-feedback">DATO VALIDO.</div>
                                            <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
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
                                            <input type="text" class="form-control" id="VAL_PAGADO" name="VAL_PAGADO" placeholder="" value="{{ old('VAL_PAGADO') }}" required data-solo-numeros>
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
                                            <input class="form-control" rows="3" name="VAL_APO_MENSUAL" id="VAL_APO_MENSUAL" placeholder="" value="{{ old('VAL_APO_MENSUAL') }}" required data-solo-numeros>
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

                          
<div class="modal-footer">
    <button type="submit" id="guardar-btn"  class="btn btn-purple btn-sm ml-auto " >Guardar</button>
    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div><!-- Alerta -->
<div id="registro-alert" class="alert alert-success alert-dismissible fade show" role="alert" style="background-color: #8B0000; font-weight: bold; color: white; font-size: 14px; max-width: 300px;  top: 20px; right: 20px; position: fixed; z-index: 9999; display: none;">
    Se ha ingresado el registro correctamente.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('#Modal-create-planillas form');
        const alertDiv = document.querySelector('#registro-alert');

        form.addEventListener('submit', function (event) {
            // Evitar el envío del formulario por defecto
            event.preventDefault();

            // Mostrar la alerta
            alertDiv.style.display = 'block';

            // Aquí podrías agregar código para enviar el formulario mediante JavaScript si es necesario.
            // Por ejemplo, podrías usar fetch() para enviarlo mediante una solicitud AJAX.

            // Ocultar la alerta después de 5 segundos
            setTimeout(function () {
                alertDiv.style.display = 'none';
                // Envía el formulario
                form.submit();
            }, 5000);
        });
    });
</script>

<script>
    // Obtener referencias a los inputs que deben contener solo letras
    var inputsLetras = document.querySelectorAll('[data-solo-letras]');
    var inputsNumeros = document.querySelectorAll('[data-solo-numeros]');

    // Función para validar y filtrar solo letras
    function soloLetras(input) {
        input.addEventListener('input', function() {
            var valor = input.value;
            var regex = /^[a-zA-Z\s]*$/;
            if (!regex.test(valor)) {
                input.value = valor.replace(/[^a-zA-Z\s]/g, '');
            }
        });
    }

    // Función para validar y filtrar solo números
    function soloNumeros(input) {
        input.addEventListener('input', function() {
            var valor = input.value;
            var regex = /^[0-9]*$/;
            if (!regex.test(valor)) {
                input.value = valor.replace(/[^0-9]/g, '');
            }
        });
    }

    // Iterar sobre cada input de solo letras y aplicar la función correspondiente
    inputsLetras.forEach(function(input) {
        soloLetras(input);
    });

    // Iterar sobre cada input de solo números y aplicar la función correspondiente
    inputsNumeros.forEach(function(input) {
        soloNumeros(input);
    });
</script>


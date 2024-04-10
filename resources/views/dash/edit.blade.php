
<!-- Modal -->
<div class="modal fade" id="Modal-edit-{{$planillas['COD_PLANILLA']}}" tabindex="-1" role="dialog" aria-labelledby="Modal-edit-{{$planillas['COD_PLANILLA']}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #8B1E06 !important;">
      <h5 class="modal-title text-white text-center" id="Modal-edit-{{$planillas['COD_PLANILLA']}}">Editar Planilla</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario de edición de planillas -->
        <form action="{{ url('planillas/update', $planillas['COD_PLANILLA']) }}" method="post" class="was-validated" id="Modal-edit-{{$planillas['COD_PLANILLA']}}">
          @csrf
          @method('PUT')

              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <!-- Campo OPERACION -->
                    <div class="form-group">
                      <label for="">OPERACION</label>
                      <select class="form-control" id="OPERACION" name="OPERACION" required>
                        <option value="U" {{ old('OPERACION') == 'U' ? 'selected' : '' }}>Actualizar</option>
                      </select>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                      @error('OPERACION')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-6">
                    <!-- Campo CODIGO PLANILLA -->
                    <div class="form-group">
                      <label for="">CODIGO PLANILLA</label>
                      <input type="text" class="form-control" id="COD_PLANILLA" name="COD_PLANILLA" placeholder="" value="{{ $planillas['COD_PLANILLA'] }}" required data-solo-numeros>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMERO</div>
                      @error('COD_PLANILLA')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="row">
                  <!-- Resto de los campos... -->

                  <!-- Campo CODIGO AFILIADO -->
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">CODIGO AFILIADO</label>
                      <input type="text" class="form-control" id="COD_AFILIADO" name="COD_AFILIADO" placeholder="" value="{{ $planillas['COD_AFILIADO'] }}" required data-solo-numeros>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMEROS</div>
                      @error('COD_AFILIADO')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- Campo NUMERO AFILIADO -->
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">NUMERO AFILIADO</label>
                      <input type="text" class="form-control" id="NUM_AFILIADO" name="NUM_AFILIADO" placeholder="" value="{{ $planillas['NUM_AFILIADO'] }}" maxlength="8" required data-solo-numeros>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMEROS</div>
                      @error('NUM_AFILIADO')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- Campo NOMBRE COMPLETO -->
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">NOMBRE COMPLETO</label>
                      <input type="text" class="form-control" id="NOM_COMPLETO" name="NOM_COMPLETO" placeholder="" value="{{ $planillas['NOM_COMPLETO'] }}" required data-solo-letras>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                      @error('NOM_COMPLETO')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- Campo FECHA DE PAGO -->
                  <div class="col-6">
                    <div class="form-group">
                      <label for="FEC_PAGO">FECHA DE PAGO</label>
                      <input type="date" class="form-control" id="FEC_PAGO" name="FEC_PAGO" placeholder="" value="{{ $planillas['FEC_PAGO'] }}" required>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. SELECCIONE UNA FECHA VALIDA</div>
                      @error('FEC_PAGO')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- Resto de los campos... -->

                </div>
                <div class="row">
                <div class="col-6">
                  <!-- Campo DENOMINACION -->
                  <div class="form-group">
                    <label for="">DENOMINACION</label>
                    <input type="text" class="form-control" id="DENOMINACION" name="DENOMINACION" placeholder="" value="{{ $planillas['DENOMINACION'] }}" required >
                    <div class="valid-feedback">DATO VALIDO.</div>
                    <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                    @error('DENOMINACION')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

               
                  <!-- Campo VALOR PAGADO -->
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">VALOR PAGADO</label>
                      <input type="text" class="form-control" id="VAL_PAGADO" name="VAL_PAGADO" placeholder="" value="{{ $planillas['VAL_PAGADO'] }}" required data-solo-numeros>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMERO</div>
                      @error('VAL_PAGADO')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- Campo USUARIO REGISTRO -->
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">USUARIO REGISTRO</label>
                      <input type="text" class="form-control" id="USR_REGISTRO" name="USR_REGISTRO" placeholder="" value="{{ $planillas['USR_REGISTRO'] }}" required >
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                      @error('USR_REGISTRO')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
             <div class="card-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                <a href="{{url('planillas/edit',$planillas['COD_PLANILLA'])}}"><button id="btnUpdate" class="btn btn-warning btn-sm custom-btn">Actualizar</button></a>
              </div>

            </div>
          </div>
        </form>
        <!-- Fin del formulario -->
      </div>
    </div>
  </div>
</div>

@if(session('editado'))
  <!-- Alerta de edición -->
  <div id="editAlert" class="alert alert-success alert-dismissible fade show p-2" role="alert" style="background-color: #8B0000; font-weight: bold; color: white; font-size: 14px; max-width: 300px; position: fixed; top: 20px; right: 20px; z-index: 9999;">
    <strong>¡El registro ha sido actualizado!</strong> <!-- Modificado el mensaje -->
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function(){
      // Ocultar la alerta después de 5 segundos
      setTimeout(function(){
        $('#editAlert').fadeOut('slow');
        // Limpiar la variable de sesión después de mostrar la alerta
        <?php session()->forget('editado'); ?>
      }, 5000);
    });
  </script>
@endif



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






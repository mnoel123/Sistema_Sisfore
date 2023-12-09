<!-- Modal -->
<div class="modal fade" id="Modal-edit-{{$planillas['COD_PLANILLA']}}" tabindex="-1" role="dialog" aria-labelledby="Modal-edit-{{$planillas['COD_PLANILLA']}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #8B1E06 !important;">
        <h5 class="modal-title" id="Modal-edit-{{$planillas['COD_PLANILLA']}}">Editar Planilla</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario de edición de planillas -->
        <form action="{{ url('planillas/update', $planillas['COD_PLANILLA']) }}" method="post" class="was-validated" id="Modal-edit-{{$planillas['COD_PLANILLA']}}">
          @csrf
          @method('PUT')

          <div class="col-md-12" novalidate><br>
            <div class="card card-primary">
              <div class="card-header" style="background-color: #8B1E06 !important;">
                <h3 class="card-title">EDITAR PLANILLAS</h3>
              </div>
              <div class="card-body">
                <div class="col-6">
                  <!-- Campo OPERACION -->
                  <div class="form-group">
                    <label for="">OPERACION</label>
                    <select class="form-control" id="OPERACION" name="OPERACION" required>
                                                <option value="" disabled selected>Seleccione una opción</option>
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
                <div class="row">
                  <div class="col-6">
                    <!-- Campo CODIGO AFILIADO -->
                    <div class="form-group">
                      <label for="">CODIGO AFILIADO</label>
                      <input type="text" class="form-control" id="COD_AFILIADO" name="COD_AFILIADO" placeholder="" value="{{ $planillas['COD_AFILIADO'] }}" required>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMEROS</div>
                      @error('COD_AFILIADO')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-6">
                    <!-- Campo CODIGO AFILIADO -->
                    <div class="form-group">
                      <label for="">NUMERO AFILIADO</label>
                      <input type="text" class="form-control" id="NUM_AFILIADO" name="NUM_AFILIADO" placeholder="" value="{{ $planillas['NUM_AFILIADO'] }}" required>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMEROS</div>
                      @error('COD_AFILIADO')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-6">
                  <!-- Campo NOMBRE COMPLETO -->
                  <div class="form-group">
                    <label for="">NOMBRE COMPLETO</label>
                    <input type="text" class="form-control" id="NOM_COMPLETO" name="NOM_COMPLETO" placeholder="" value="{{ $planillas['NOM_COMPLETO'] }}" required>
                    <div class="valid-feedback">DATO VALIDO.</div>
                    <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                    @error('DENOMINACION')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                  <div class="col-6">
                    <!-- Campo FECHA DE PAGO -->
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
                </div>
                <div class="col-6">
                  <!-- Campo DENOMINACION -->
                  <div class="form-group">
                    <label for="">DENOMINACION</label>
                    <input type="text" class="form-control" id="DENOMINACION" name="DENOMINACION" placeholder="" value="{{ $planillas['DENOMINACION'] }}" required>
                    <div class="valid-feedback">DATO VALIDO.</div>
                    <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                    @error('DENOMINACION')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <!-- Campo VALOR PAGADO -->
                    <div class="form-group">
                      <label for="">VALOR PAGADO</label>
                      <input type="text" class="form-control" id="VAL_PAGADO" name="VAL_PAGADO" placeholder="" value="{{ $planillas['VAL_PAGADO'] }}" required>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMERO</div>
                      @error('VAL_PAGADO')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-6">
                    <!-- Campo CODIGO PLANILLA -->
                    <div class="form-group">
                      <label for="">CODIGO PLANILLA</label>
                      <input type="text" class="form-control" id="COD_PLANILLA" name="COD_PLANILLA" placeholder="" value="{{ $planillas['COD_PLANILLA'] }}" required>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMERO</div>
                      @error('COD_PLANILLA')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-6">
                    <!-- Campo VALOR APORTACION MENSUAL -->
                    <div class="form-group">
                      <label for="">VALOR APORTACION MENSUAL</label>
                      <input type="text" class="form-control" id="VAL_APO_MENSUAL" name="VAL_APO_MENSUAL" placeholder="" value="{{ $planillas['VAL_APO_MENSUAL'] }}" required>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMERO</div>
                      @error('VAL_APO_MENSUAL')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-6">
                    <!-- Campo USUARIO REGISTRO -->
                    <div class="form-group">
                      <label for="">USUARIO REGISTRO</label>
                      <input type="text" class="form-control" id="USR_REGISTRO" name="USR_REGISTRO" placeholder="" value="{{ $planillas['USR_REGISTRO'] }}" required>
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
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                <a href="{{url('planillas/edit',$planillas['COD_PLANILLA'])}}"><button class="btn btn-danger btn-sm">Actualizar</button></a>
              </div>
            </div>
          </div>
        </form>
        <!-- Fin del formulario -->
      </div>
    </div>
  </div>
</div>


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
   
@stop

@section('js')
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

</script>
@stop
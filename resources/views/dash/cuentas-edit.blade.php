<div class="modal fade" id="Modal-edit-{{$cuentas['COD_CUENTA']}}" tabindex="-1" role="dialog" aria-labelledby="Modal-edit-{{$cuentas['COD_CUENTA']}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Modal-edit-{{$cuentas['COD_CUENTA']}}">Actualizar Cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('cuentas/update', $cuentas['COD_CUENTA']) }}" method="post" class="was-validated" id="Modal-edit-{{$cuentas['COD_CUENTA']}}">
          @csrf
          @method('put')
    <div class="modal-body">
        <div class="col-md-12" novalidate>
            <div class="card card-primary">
                <div class="card-header" style="background-color: #8B1E06 !important;>
                    <h3 class="card-title">Actualice la cuenta</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                            <label for="OPERACION">OPERACION</label>
                                <input type="text" class="form-control" id="OPERACION" name="OPERACION" value="U" readonly placeholder="ACTUALIZAR">
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
                                <input type="text" class="form-control" id="COD_CTA_MAYORES" name="COD_CTA_MAYORES" placeholder="Valores de 1 a 4" value="{{$cuentas['COD_CTA_MAYORES']}}" required>
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
                                <input type="text" class="form-control" id="NUM_SUBCUENTA" name="NUM_SUBCUENTA" placeholder="" value="{{$cuentas['NUM_SUBCUENTA']}}" required>
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
                                <input type="text" class="form-control" id="MOVIMIENTO" name="MOVIMIENTO" placeholder="" value="{{$cuentas['MOVIMIENTO']}}" required>
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
                                <input type="text" class="form-control" id="TIP_CUENTA" name="TIP_CUENTA" placeholder="" value="{{$cuentas['TIP_CUENTA'] }}" required>
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
                                <input type="text" class="form-control" id="NOM_SUBCUENTA" name="NOM_SUBCUENTA" placeholder="" value="{{$cuentas['NOM_SUBCUENTA'] }}" required>
                                <div class="valid-feedback">DATO VALIDO.</div>
                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
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
                    <a class="btn btn-secundary" href="{{url('cuentas')}}">Regresar</a>
                    <a href="{{url('cuentas/edit',$cuentas['COD_CUENTA'])}}"><button class="btn btn-danger">Actualizar</button></a>
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
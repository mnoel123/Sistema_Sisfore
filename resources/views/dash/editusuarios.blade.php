<!-- Modal -->
<div class="modal fade" id="Modal-edit-{{$planillas['ID']}}" tabindex="-1" role="dialog" aria-labelledby="Modal-edit-{{$users['ID']}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #8B1E06 !important;">
        <h5 class="modal-title" id="Modal-edit-{{$users['ID']}}">Editar Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario de edición de usuarios -->
        <form action="{{ url('users/update', $users['Id']) }}" method="post" class="was-validated" id="Modal-edit-{{$users['ID']}}">
          @csrf
          @method('PUT')

          <div class="col-md-12" novalidate><br>
            <div class="card card-primary">
              <div class="card-header" style="background-color: #8B1E06 !important;">
                <h3 class="card-title">EDITAR USUARIOS</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
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

                  <div class="col-md-6">
                    <!-- Campo CODIGO PLANILLA -->
                    <div class="form-group">
                      <label for="">ID</label>
                      <input type="text" class="form-control" id="ID" name="ID" placeholder="" value="{{ $users['ID'] }}" required>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMERO</div>
                      @error('ID')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>

    


                  <!-- Campo NOMBRE COMPLETO -->
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">NOMBRE COMPLETO</label>
                      <input type="text" class="form-control" id="Name" name="Name" placeholder="" value="{{ $users['Name'] }}" required>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                      @error('Name')
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
                    <label for="">NOMBRE USUARIO</label>
                    <input type="text" class="form-control" id="NOM_USUARIO" name="NOM_USUARIO" placeholder="" value="{{ $users['NOM_USUARIO'] }}" required>
                    <div class="valid-feedback">DATO VALIDO.</div>
                    <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                    @error('NOM_USUARIO')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

               
                  <!-- Campo VALOR PAGADO -->
                  <div class="col-6">
                    <div class="form-group">
                      <label for="">EMAIL</label>
                      <input type="text" class="form-control" id="EMAIL" name="EMAIL" placeholder="" value="{{ $users['EMAIL'] }}" required>
                      <div class="valid-feedback">DATO VALIDO.</div>
                      <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMERO</div>
                      @error('EMAIL')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                 
              <div class="card-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                <a href="{{url('users/edit',$users['ID'])}}"><button id="btnUpdate" class="btn btn-danger btn-sm">Actualizar</button></a>
              </div>
            </div>
          </div>
        </form>
        <!-- Fin del formulario -->
      </div>
    </div>
  </div>
</div>

<!-- Alerta de edición -->
<div id="editAlert" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none; background-color: #87CEEB; font-weight: bold; color: black;">
  <strong>¡Registro editado!</strong> Ha sido modificado exitosamente.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function() {
    // Mostrar la alerta al hacer clic en el botón Actualizar
    $('#btnUpdate').on('click', function() {
      $('#editAlert').fadeIn();
      setTimeout(function() {
        $('#editAlert').fadeOut();
      }, 5000); // Ocultar después de 5 segundos
    });
  });
</script>


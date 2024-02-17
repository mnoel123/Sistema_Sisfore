<!-- Modal -->
<div class="modal fade" id="Modal-edit-{{$personas['COD_PERSONA']}}" tabindex="-1" role="dialog" aria-labelledby="Modal-edit-{{$personas['COD_PERSONA']}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #8B1E06 !important;">
        <h5 class="modal-title" id="Modal-edit-{{$personas['COD_PERSONA']}}">Editar Personas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario de edición de planillas -->
        <form action="{{ url('/update', $personas['COD_PERSONA']) }}" method="post" class="was-validated" id="Modal-edit-{{$personas['COD_PERSONA']}}">
          @csrf
          @method('PUT')

          <div class="col-md-12" novalidate><br>
            <div class="card card-primary">
              <div class="card-header" style="background-color: #8B1E06 !important;">
                <h3 class="card-title">EDITAR PERSONAS</h3>
              </div>
              <div class="card-body">
                <div class="col-6">
                  <!-- Campo OPERACION -->
                 
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
                                        
                                        


                                        <div class="col-6">
                                        <div class="col-md-6"></div>
                                            <div class="form-group">
                                                <label for="NUM_IDENTIDAD">NUMERO DE IDENTIDAD</label>
                                                <input type="text" class="form-control @error('NUM_IDENTIDAD') is-invalid @enderror" id="NUM_IDENTIDAD" name="NUM_IDENTIDAD" placeholder="" value="{{ old('NUM_IDENTIDAD') }}" maxlength="15" required>
        
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">
                                                @error('NUM_IDENTIDAD')
                                                    {{ $message }}
                                                @else
                                                    LOS CAMPOS NO PUEDEN ESTAR VACÍOS. INGRESE SOLO NÚMEROS Y MAXIMO 15 CARACTERES.
                                                @enderror
                                                </div>
        
                                                @error('NUM_IDENTIDAD')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NOM_PERSONA">NOMBRES</label>
                                                <input type="text" class="form-control" id="NOM_PERSONA" name="NOM_PERSONA" placeholder="" value="{{ old('NOM_PERSONA') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO LETRAS</div>
                                                @error('NOM_PERSONA')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row"> 
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="APE_PERSONA">APELLIDOS</label>
                                                <input type="text" class="form-control" id="APE_PERSONA" name="APE_PERSONA" placeholder="" value="{{ old('APE_PERSONA') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INGRESE SOLO LETRAS</div>
                                                @error('APE_PERSONA')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="SEX_PERSONA">SEXO</label>
                                                <select class="form-control" id="SEX_PERSONA" name="SEX_PERSONA" required>
                                                  <option>MASCULINO</option>
                                                  <option>FEMENINO</option>
                                                </select>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.SELECCIONE UN DATO</div>
                                                @error('SEX_PERSONA')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                     

                                    <div class="row"> 
                                    <div class="col-6">
                                            <div class="form-group">
                                                <label for="FEC_NACIMIENTO">FECHA DE NACIMIENTO</label>
                                                <input type="date" class="form-control" id="FEC_NACIMIENTO" name="FEC_NACIMIENTO" placeholder="" value="{{ old('FEC_NACIMIENTO') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. SELECCIONE UNA FECHA VALIDA</div>
                                                @error('FEC_NACIMIENTO')
                                                    <span class="text-danger">{{ $message }}</span>                                                   
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="TIP_ESTADO">TIPO DE ESTADO</label>
                                                <select class="form-control" id="TIP_ESTADO" name="TIP_ESTADO" required>
                                                  <option>ACTIVO</option>
                                                  <option>INACTIVO</option>
                                                </select>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. SELECIONE UN DATO</div>
                                                @error('TIP_ESTADO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="ESTADO_CIVIL">ESTADO CIVIL</label>
                                                <select class="form-control" id="ESTADO_CIVIL" name="ESTADO_CIVIL" required>
                                                  <option>CASADO</option>
                                                  <option>SOLTERO</option>
                                                  <option>UNION LIBRE</option>
                                                </select>
                                                 <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. SELECCIONE UN DATO</div>
                                                @error('ESTADO_CIVIL')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

      
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="EMAIL">CORREO ELECTRONICO</label>
                                                <input type="email" class="form-control @error('EMAIL') is-invalid @enderror" id="EMAIL" name="EMAIL" placeholder="" value="{{ old('EMAIL') }}">
        
                                                @error('EMAIL')
                                                   <div class="invalid-feedback">{{ $message }}</div>
                                                   @enderror

                                                       @if(session('nombre_ejemplo'))
                                                        <p>Ejemplo: {{ session('nombre_ejemplo') }}</p>
                                                    @endif
                                          </div>
                                        </div>



                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="TIP_TELEFONO">TIPO DE TELEFONO</label>
                                                <select class="form-control" id="TIP_TELEFONO" name="TIP_TELEFONO" required>
                                                  <option>CELULAR</option>
                                                  <option>FIJO</option>
                                                </select>
                                                 <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. SELECCIONA UN DATO</div>
                                                @error('TIP_TELEFONO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NUM_TELEFONO">NUMERO DE TELEFONO</label>
                                                <input type="text" class="form-control" id="NUM_TELEFONO" name="NUM_TELEFONO" placeholder="" value="{{ old('NUM_TELEFONO') }}" required|numeric>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INGRESE SOLO NUMERO</div>
                                                @error('NUM_TELEFONO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="IND_TELEFONO">ESTADO DEL TELEFONO</label>
                                                <select class="form-control" id="IND_TELEFONO" name="IND_TELEFONO" required>
                                                  <option>ACTIVO</option>
                                                  <option>INACTIVO</option>
                                                </select>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. SELECCIONE UN DATO</div>
                                                @error('IND_TELEFONO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="DES_TELEFONO">DESCRIPCION DEL TELEFONO</label>
                                                <input type="text" class="form-control" id="DES_TELEFONO" name="DES_TELEFONO" placeholder="" value="{{ old('DES_TELEFONO') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.INGRESE SOLO LETRAS</div>
                                                @error('DES_TELEFONO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="DEPARTAMENTO">DEPARTAMENTO</label>
                                                <select class="form-control" id="DEPARTAMENTO" name="DEPARTAMENTO" required>
                                                  <option>Atlántida</option>
                                                  <option>Choluteca</option>
                                                  <option>Colón</option>
                                                  <option>Comayagua</option>
                                                  <option>Copán</option>
                                                  <option>Cortés</option>                                                  
                                                  <option>El Paraíso</option>
                                                  <option>Francisco Morazán</option>                                              
                                                  <option>Gracias a Dios</option>
                                                  <option>Intibucá</option>                                                
                                                  <option>Islas de la Bahía</option>
                                                  <option>La Paz</option>                                                 
                                                  <option>Lempira</option>
                                                  <option>Ocotepeque</option>                                                 
                                                  <option>Olancho</option>
                                                  <option>Santa Bárbara</option>
                                                  <option>Valle</option>   
                                                  <option>Yoro</option>                                                                                                                                                      
                                                </select>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.ELIJA UNA OPCIÓN</div>
                                                @error('DEPARTAMENTO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="MUNICIPIO">MUNICIPIO</label>
                                                <input type="text" class="form-control" id="MUNICIPIO" name="MUNICIPIO" placeholder="" value="{{ old('MUNICIPIO') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('MUNICIPIO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="COLONIA">COLONIA</label>
                                                <input type="text" class="form-control" id="COLONIA" name="COLONIA" placeholder="" value="{{ old('COLONIA') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('COLONIA')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="DES_DIRECCION">DESCRIPCIÓN</label>
                                                <input type="text" class="form-control" id="DES_DIRECCION" name="DES_DIRECCION" placeholder="" value="{{ old('DES_DIRECCION') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('DES_DIRECCION')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NUM_AFILIADO">NÚMERO DE AFILIADO</label>
                                                <input type="text" class="form-control" id="NUM_AFILIADO" name="NUM_AFILIADO" placeholder="" value="{{ old('NUM_AFILIADO') }}" required|numeric>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('NUM_AFILIADO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NOM_COMPLETO_B1">NOMBRE BENEFICIARIO 1</label>
                                                <input type="text" class="form-control" id="NOM_COMPLETO_B1" name="NOM_COMPLETO_B1" placeholder="" value="{{ old('NOM_COMPLETO_B1') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('NOM_COMPLETO_B1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="PORCENTAJE_B1">PORCENTAJE BENEFICIARIO 1</label>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('PORCENTAJE_B1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NOM_COMPLETO_B2">NOMBRE BENEFICIARIO 2</label>
                                                <input type="text" class="form-control" id="NOM_COMPLETO_B2" name="NOM_COMPLETO_B2" placeholder="" value="{{ old('NOM_COMPLETO_B2') }}">
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                @error('NOM_COMPLETO_B2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="PORCENTAJE_B2">PORCENTAJE BENEFICIARIO 2</label>
                                                <input type="text" class="form-control" id="PORCENTAJE_B2" name="PORCENTAJE_B2" placeholder="" value="{{ old('PORCENTAJE_B2') }}">
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                @error('PORCENTAJE_B2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NOM_COMPLETO_B3">NOMBRE BENEFICIARIO 3</label>
                                                <input type="text" class="form-control" id="NOM_COMPLETO_B3" name="NOM_COMPLETO_B3" placeholder="" value="{{ old('NOM_COMPLETO_B3') }}">
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                @error('NOM_COMPLETO_B3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="PORCENTAJE_B3">PORCENTAJE_B3</label>
                                                <input type="text" class="form-control" id="PORCENTAJE_B3" name="PORCENTAJE_B3" placeholder="" value="{{ old('PORCENTAJE_B3') }}">
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                @error('PORCENTAJE_B3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NOM_COMPLETO_B4">NOMBRE BENEFICIARIO 4</label>
                                                <input type="text" class="form-control" id="NOM_COMPLETO_B4" name="NOM_COMPLETO_B4" placeholder="" value="{{ old('NOM_COMPLETO_B4') }}">
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                @error('NOM_COMPLETO_B4')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="PORCENTAJE_B4">PORCENTAJE BENEFICIARIO 4</label>
                                                <input type="text" class="form-control" id="PORCENTAJE_B4" name="PORCENTAJE_B4" placeholder="" value="{{ old('PORCENTAJE_B4') }}">
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                @error('PORCENTAJE_B4')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NOM_COMPLETO_B5">NOMBRE BENEFICIARIO 5</label>
                                                <input type="text" class="form-control" id="NOM_COMPLETO_B5" name="NOM_COMPLETO_B5" placeholder="" value="{{ old('NOM_COMPLETO_B5') }}">
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                @error('NOM_COMPLETO_B3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="PORCENTAJE_B5">PORCENTAJE BENEFICIARIO 5</label>
                                                <input type="text" class="form-control" id="PORCENTAJE_B5" name="PORCENTAJE_B5" placeholder="" value="{{ old('PORCENTAJE_B5') }}">
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                @error('PORCENTAJE_B5')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



        


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="CONTRASENA">CONTRASEÑA</label>
                                                <input type="password" class="form-control" id="CONTRASENA" name="CONTRASENA" placeholder="" value="{{ old('CONTRASENA') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('CONTRASENA')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NOM_USUARIO">NOMBRE DE USUARIO</label>
                                                <input type="txt" class="form-control" id="NOM_USUARIO" name="NOM_USUARIO" placeholder="" value="{{ old('NOM_USUARIO') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('NOM_USUARIO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="TIP_USUARIO">TIPO USUARIO</label>
                                                <select class="form-control" id="TIP_USUARIO" name="TIP_USUARIO" required>
                                                  <option>ADMINISTRADOR</option>
                                                  <option>COMISIONADO</option>
                                                  <option>DIRECTIVO</option>
                                                </select>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('TIP_USUARIO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="IND_USUARIO">ESTADO DEL USUARIO</label>
                                                <select class="form-control" id="IND_USUARIO" name="IND_USUARIO" required>
                                                  <option>ACTIVO</option>
                                                  <option>INACTIVO</option>
                                                </select>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('IND_USUARIO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="PRI_ACCESS">PRIMER ACCESO</label>
                                                <input type="text" class="form-control" id="PRI_ACCESS" name="PRI_ACCESS" placeholder="" value="{{ old('PRI_ACCESS') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('PRI_ACCESS')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>





              <div class="card-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                <a href="{{url('personas/edit',$personas['COD_PERSONA'])}}"><button class="btn btn-danger btn-sm">Actualizar</button></a>
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
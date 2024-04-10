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
        <!-- Formulario de edición de personas -->
        <form action="{{ url('personas/update', $personas['COD_PERSONA']) }}" method="post" class="was-validated" id="Modal-edit-{{$personas['COD_PERSONA']}}">
          @csrf
          @method('PUT')

          <div class="col-md-12" novalidate><br>
            <div class="card card-primary">
              <div class="card-header" style="background-color: #8B1E06 !important;">
                <h3 class="card-title">EDITAR PERSONAS</h3>
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

                                        
                  <div class="col-6">
                                                <div class="form-group">
                                                    <label for="NUM_IDENTIDAD">Número de Identidad</label>
                                                    <input type="text" class="form-control @error('NUM_IDENTIDAD') is-invalid @enderror" id="NUM_IDENTIDAD" name="NUM_IDENTIDAD" placeholder="Ej. 1234567890123" value="{{ old('NUM_IDENTIDAD') }}" maxlength="15" required>

                                                    <div class="valid-feedback">Dato válido.</div>
                                                    <div class="invalid-feedback">
                                                        @error('NUM_IDENTIDAD')
                                                            {{ $message }}
                                                        @else
                                                            Los campos no pueden estar vacíos. Ingrese máximo 15 caracteres.
                                                        @enderror
                                                    </div>

                                                    @error('NUM_IDENTIDAD')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="NOM_PERSONA">Nombres</label>
                                                    <input type="text" class="form-control @error('NOM_PERSONA') is-invalid @enderror" id="NOM_PERSONA" name="NOM_PERSONA" placeholder="Ej. Juan" value="{{ old('NOM_PERSONA') }}" required>
                                                    <div class="valid-feedback">Dato válido.</div>
                                                    <div class="invalid-feedback">Los campos no pueden estar vacíos. Introduzca solo letras.</div>
                                                    @error('NOM_PERSONA')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>



                                     <div class="row"> 
                                     <div class="col-6">
                                        <div class="form-group">
                                            <label for="APE_PERSONA">Apellidos</label>
                                            <input type="text" class="form-control @error('APE_PERSONA') is-invalid @enderror" id="APE_PERSONA" name="APE_PERSONA" placeholder="Ej. Pérez" value="{{ old('APE_PERSONA') }}" required>
                                            <div class="valid-feedback">Dato válido.</div>
                                            <div class="invalid-feedback">Los campos no pueden estar vacíos. Ingrese solo letras.</div>
                                            @error('APE_PERSONA')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>



                                        <div class="col-6">
                                        <div class="form-group">
                                            <label for="SEX_PERSONA">Sexo</label>
                                            <select class="form-control" id="SEX_PERSONA" name="SEX_PERSONA" required>
                                                <option value="" disabled selected>Selecciona una opción</option>
                                                <option value="MASCULINO">Masculino</option>
                                                <option value="FEMENINO">Femenino</option>
                                            </select>
                                        <div class="valid-feedback">Dato válido.</div>
                                        <div class="invalid-feedback">Los campos no pueden estar vacíos. Selecciona un dato.</div>
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
                                                <option value="" disabled selected>Selecciona una opción</option>
                                                  <option value="ACTIVO">ACTIVO</option>
                                                  <option value="INACTIVO">INACTIVO</option>
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
                                                <option value="" disabled selected>Selecciona una opción</option>
                                                  <option value ="CASADO">CASADO</option>
                                                  <option value ="SOLTERO">SOLTERO</option>
                                                  <option value="UNION LIBRE">UNION LIBRE</option>
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
                                                <input type="email" class="form-control @error('EMAIL') is-invalid @enderror" id="EMAIL" name="EMAIL" placeholder="correo@example.com" value="{{ old('EMAIL') }}">
        
                                                @error('EMAIL')
                                                   <div class="invalid-feedback">{{ $message }}</div>
                                                   @enderror

                                                       @if(session('nombre_ejemplo'))
                                                        <p class="text-muted">Ejemplo: {{ session('nombre_ejemplo') }}</p>
                                                    @endif
                                          </div>
                                        </div>



                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="TIP_TELEFONO">TIPO DE TELEFONO</label>
                                                <select class="form-control" id="TIP_TELEFONO" name="TIP_TELEFONO" required>
                                                <option value="" disabled selected>Selecciona una opción</option>
                                                  <option value="CELULAR">CELULAR</option>
                                                  <option value=""FIJO>FIJO</option>
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
                                                <label for="NUM_TELEFONO">Número de Teléfono</label>
                                                <input type="text" class="form-control @error('NUM_TELEFONO') is-invalid @enderror" id="NUM_TELEFONO" name="NUM_TELEFONO" placeholder="Ej. 123456789" value="{{ old('NUM_TELEFONO') }}" maxlength="8" required>
                                                <div class="valid-feedback">Dato válido.</div>
                                                <div class="invalid-feedback">Los campos no pueden estar vacíos. Ingrese solo números y max 8 caracteres.</div>
                                                @error('NUM_TELEFONO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="IND_TELEFONO">ESTADO DEL TELEFONO</label>
                                                <select class="form-control" id="IND_TELEFONO" name="IND_TELEFONO" required>
                                                <option value="" disabled selected>Selecciona una opción</option>
                                                  <option value="ACTIVO">ACTIVO</option>
                                                  <option value="INACTIVO">INACTIVO</option>
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
                                                <label for="DES_TELEFONO">Descripción del Teléfono</label>
                                                <input type="text" class="form-control @error('DES_TELEFONO') is-invalid @enderror" id="DES_TELEFONO" name="DES_TELEFONO" placeholder="Ej. Teléfono principal" value="{{ old('DES_TELEFONO') }}" maxlength="20" required>
                                                <div class="valid-feedback">Dato válido.</div>
                                                <div class="invalid-feedback">Los campos no pueden estar vacíos. Ingrese solo letras y max 20 caracteress.</div>
                                                @error('DES_TELEFONO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="DEPARTAMENTO">DEPARTAMENTO</label>
                                                <select class="form-control" id="DEPARTAMENTO" name="DEPARTAMENTO" required>
                                                <option value="" disabled selected>Selecciona una opción</option>
                                                  <option value="ATLANTIDA">Atlántida</option>
                                                  <option value="CHOLUTECA">Choluteca</option>
                                                  <option value="COLON">Colón</option>
                                                  <option value="COMAYAGUA">Comayagua</option>
                                                  <option value="COPAN">Copán</option>
                                                  <option value="CORTES">Cortés</option>                                                  
                                                  <option value="ELPARAISO">El Paraíso</option>
                                                  <option value="FRANCISCO MORAZAN">Francisco Morazán</option>                                              
                                                  <option value="GRACIAS A DIOS">Gracias a Dios</option>
                                                  <option value="INTIBUCA">Intibucá</option>                                                
                                                  <option value="ISLAS DE LA BAHIA">Islas de la Bahía</option>
                                                  <option value="LA PAZ">La Paz</option>                                                 
                                                  <option value="LEMPIRA">Lempira</option>
                                                  <option value="OCOTEPEQUE">Ocotepeque</option>                                                 
                                                  <option value="OLANCHO">Olancho</option>
                                                  <option value="SANTA BARBARA">Santa Bárbara</option>
                                                  <option value="VALLE">Valle</option>   
                                                  <option value="YORO">Yoro</option>                                                                                                                                                      
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
                                                <input type="text" class="form-control" id="MUNICIPIO" name="MUNICIPIO" placeholder="Ejemplo: Ciudad ABC" value="{{ old('MUNICIPIO') }}" maxlength="50" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS, y max 50 caracteres.</div>
                                                @error('MUNICIPIO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="COLONIA">COLONIA</label>
                                                <input type="text" class="form-control" id="COLONIA" name="COLONIA" placeholder="Ejemplo: Ciudad ABC" value="{{ old('COLONIA') }}" maxlength="100" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS y max 100 caracteres.</div>
                                                @error('COLONIA')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="DES_DIRECCION">DESCRIPCIÓN</label>
                                                <input type="text" class="form-control" id="DES_DIRECCION" name="DES_DIRECCION" placeholder="Ejemplo: Ala par de ABC" value="{{ old('DES_DIRECCION') }}" required>
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
                                                <input type="text" class="form-control @error('NUM_AFILIADO') is-invalid @enderror" 
                                                    id="NUM_AFILIADO" name="NUM_AFILIADO" placeholder="Ej. 00302001" 
                                                    value="{{ old('NUM_AFILIADO') }}" minlength="6" maxlength="8" required>

                                                <div class="valid-feedback">Dato válido.</div>
                                                <div class="invalid-feedback">
                                                    @error('NUM_AFILIADO')
                                                        {{ $message }}
                                                    @else
                                                        Los campos no pueden estar vacíos. Ingrese solo números mínimo 6, y máximo 8 caracteres.
                                                    @enderror
                                                </div>

                                                @error('NUM_AFILIADO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="DENOMINACION">DENOMINACION</label>
                                                <select class="form-control" id="DENOMINACION" name="DENOMINACION" required>
                                                <option value="" disabled selected>Selecciona una opción</option>
                                                  <option value ="DIST. CHOLUTECA">DIST. CHOLUTECA</option>
                                                  <option value ="DIST. METROSUR">DIST. METROSUR</option>
                                                  <option value ="LINEA 1 (PLANTA I)">LINEA 1 (PLANTA I)</option>
                                                  <option value ="OPERACIONES Y SERVI">OPERACIONES Y SERVI</option>
                                                  <option value= "DIST. DANLI">DIST. DANLI</option>
                                                  <option values= "JARABES (PLANTA I)">JARABES (PLANTA I)</option>                                                  
                                                  <option values = "TRATAMIENTO DE AGUA">TRATAMIENTO DE AGUA</option>
                                                  <option values = "CENTRO DE DISTRIBUCION">CENTRO DE DISTRIBUCION</option>                                              
                                                  <option values = "MERCADEO">MERCADEO</option>                                                                                                                                          
                                                </select>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.ELIJA UNA OPCIÓN</div>
                                                @error('DENOMINACION')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NOM_COMPLETO_B1">NOMBRE BENEFICIARIO 1</label>
                                                <input type="text" class="form-control" id="NOM_COMPLETO_B1" name="NOM_COMPLETO_B1" placeholder="Ejemplo: Juan Pérez" value="{{ old('NOM_COMPLETO_B1') }}" required>
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
                                                <div class="input-group">
                                                <input type="text" class="form-control" id="PORCENTAJE_B1" name="PORCENTAJE_B1" placeholder="" value="{{ old('PORCENTAJE_B1') }}" required>
                                                <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                                 </div>
                                                    </div>
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
                                                <input type="text" class="form-control" id="NOM_COMPLETO_B2" name="NOM_COMPLETO_B2" placeholder="Ejemplo: Juan Pérez" value="{{ old('NOM_COMPLETO_B2') }}">
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                @error('NOM_COMPLETO_B2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="PORCENTAJE_B2">Porcentaje Beneficiario 2</label>
                                                <div class="input-group">
                                                <input type="text" class="form-control" id="PORCENTAJE_B2" name="PORCENTAJE_B2" placeholder="" value="{{ old('PORCENTAJE_B2') }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                            <div class="valid-feedback">Dato válido.</div>
                                            @error('PORCENTAJE_B2')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                        </div>
 
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NOM_COMPLETO_B3">NOMBRE BENEFICIARIO 3</label>
                                                <input type="text" class="form-control" id="NOM_COMPLETO_B3" name="NOM_COMPLETO_B3" placeholder="Ejemplo: Juan Pérez" value="{{ old('NOM_COMPLETO_B3') }}">
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                @error('NOM_COMPLETO_B3')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="PORCENTAJE_B3">Porcentaje Beneficiario 3</label>
                                                <div class="input-group">
                                                <input type="text" class="form-control" id="PORCENTAJE_B3" name="PORCENTAJE_B3" placeholder="" value="{{ old('PORCENTAJE_B3') }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                            <div class="valid-feedback">Dato válido.</div>
                                            @error('PORCENTAJE_B3')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                        </div>
              
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NOM_COMPLETO_B4">NOMBRE BENEFICIARIO 4</label>
                                                <input type="text" class="form-control" id="NOM_COMPLETO_B4" name="NOM_COMPLETO_B4" placeholder="Ejemplo: Juan Pérez" value="{{ old('NOM_COMPLETO_B4') }}">
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                @error('NOM_COMPLETO_B4')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="PORCENTAJE_B4">Porcentaje Beneficiario 4</label>
                                                <div class="input-group">
                                                <input type="text" class="form-control" id="PORCENTAJE_B4" name="PORCENTAJE_B4" placeholder="" value="{{ old('PORCENTAJE_B4') }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                            <div class="valid-feedback">Dato válido.</div>
                                            @error('PORCENTAJE_B4')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                        </div>
              

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NOM_COMPLETO_B5">NOMBRE BENEFICIARIO 5</label>
                                                <input type="text" class="form-control" id="NOM_COMPLETO_B5" name="NOM_COMPLETO_B5" placeholder="Ejemplo: Juan Pérez" value="{{ old('NOM_COMPLETO_B5') }}">
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                @error('NOM_COMPLETO_B5')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="PORCENTAJE_B5">Porcentaje Beneficiario 5</label>
                                                <div class="input-group">
                                                <input type="text" class="form-control" id="PORCENTAJE_B5" name="PORCENTAJE_B5" placeholder="" value="{{ old('PORCENTAJE_B5') }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                            <div class="valid-feedback">Dato válido.</div>
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
                                                <option value="" disabled selected>Selecciona una opción</option>
                                                  <option value = "ADMINISTRADOR">ADMINISTRADOR</option>
                                                  <option value = "COMISIONADO">COMISIONADO</option>
                                                  <option value ="DIRECTIVO">DIRECTIVO</option>
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
                                                <option value="" disabled selected>Selecciona una opción</option>
                                                  <option vaue ="ACTIVO">ACTIVO</option>
                                                  <option value = "INACTIVO">INACTIVO</option>
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
                                            
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="IP_ULT_ACCESS">ULTIMO ACCESO</label>
                                                <input type="text" class="form-control" id="IP_ULT_ACCESS" name="IP_ULT_ACCESS" placeholder="" value="{{ old('IP_ULT_ACCESS') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('IP_ULT_ACCESS')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="USR_REGISTRO">USUARIO DE REGISTRO</label>
                                                <input type="text" class="form-control" id="USR_REGISTRO" name="USR_REGISTRO" placeholder="" value="{{ old('USR_REGISTRO') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('USR_REGISTRO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>




              <div class="card-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                <a href="{{url('personas/edit',$personas['COD_PERSONA'])}}"><button id="btnUpdate" class="btn btn-danger btn-sm">Actualizar</button></a>
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
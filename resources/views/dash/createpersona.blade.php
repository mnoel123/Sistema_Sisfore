<div class="modal fade" id="Modal-create-{{('personas')}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="{{url('personas')}}" method="post" class="was-validated">
                        @csrf
            <div class="modal-content"> 
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Ingreso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="col-md-12" novalidate>
                            <div class="card card-primary">
                                <div class="card-header"> 
                                    <h3 class="card-title"> Ingrese una Nueva Persona</h3>
                                </div>
                                
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="OPERACION">OPERACION</label>
                                                <select class="form-control" id="OPERACION" name="OPERACION" required>
                                                    
                                                <option value="I" {{ old('OPERACION') == 'I' ? 'selected' : '' }}>Insertar</option>
                                                <option value="U" {{ old('OPERACION') == 'U' ? 'selected' : '' }}>Actualizar</option>
                                                <option value="D" {{ old('OPERACION') == 'D' ? 'selected' : '' }}>Eliminar</option>
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
                                                <label for="COD_PERSONA">CODIGO </label>
                                                <input type="text" class="form-control" id="COD_PERSONA" name="COD_PERSONA" placeholder="" value="{{ old('COD_PERSONA') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INTRODUZCA SOLO NUMEROS</div>
                                                @error('COD_PERSONA')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div> 


                                        <div class="col-6">
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
                                                <input type="text" class="form-control" id="VAL_PAGADO" name="APE_PERSONA" placeholder="" value="{{ old('APE_PERSONA') }}" required>
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
                                                <select name="SEX_PERSONA">
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
                                                <select name="SEX_PERSONA">
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
                                                <select name="SEX_PERSONA">
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
                                                <input type="email" class="form-control @error('EMAIL') is-invalid @enderror" id="EMAIL" name="EMAIL" placeholder="" value="{{ old('EMAIL') }}" required>
        
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
                                                <label for="COD_TELEFONO">CODIGO DEL TELEFONO</label>
                                                <input type="text" class="form-control" id="COD_TELEFONO" name="COD_TELEFONO" placeholder="" value="{{ old('COD_TELEFONO') }}" required|numeric>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INGRESAR SOLO NUMEROS</div>
                                                @error('TIP_ESTADO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> 

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="TIP_TELEFONO">TIPO DE TELEFONO</label>
                                                <select name="TIP_TELEFONO">
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
                                                <select name="IND_TELEFONO">
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
                                                <label for="COD_DIRECCION">CODIGO DE DIRECCION</label>
                                                <input type="text" class="form-control" id="COD_DIRECCION" name="COD_DIRECCION" placeholder="" value="{{ old('COD_DIRECCION') }}" required|numeric>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS. INGRESE SOLO NUMEROS</div>
                                                @error('COD_DIRECCION')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> 

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="DEPARTAMENTO">DEPARTAMENTO</label>
                                                <select name="DEPARTAMENTO" >
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
                                                <label for="COD_AFILIADO">CÓDIGO DEL AFILIADO</label>
                                                <input type="text" class="form-control" id="COD_AFILIADO" name="COD_AFILIADO" placeholder="" value="{{ old('COD_AFILIADO') }}" required|numeric>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('COD_AFILIADO')
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
                                                <label for="COD_BENEFICIARIO">CODIGO DEL BENEFICIARIO</label>
                                                <input type="text" class="form-control" id="TIP_ESTADO" name="TIP_ESTADO" placeholder="" value="{{ old('TIP_ESTADO') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('COD_BENEFICIARIO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="NOM_COMPLETO">NOMBRE BENEFICIARIO</label>
                                                <input type="text" class="form-control" id="NOM_COMPLETO" name="NOM_COMPLETO" placeholder="" value="{{ old('NOM_COMPLETO') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('NOM_COMPLETO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="PORCENTAJE">PORCENTAJE</label>
                                                <input type="text" class="form-control" id="PORCENTAJE" name="PORCENTAJE" placeholder="" value="{{ old('PORCENTAJE') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('PORCENTAJE')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="COD_USUARIO">CODIGO USUARIO</label>
                                                <input type="text" class="form-control" id="COD_USUARIO" name="COD_USUARIO" placeholder="" value="{{ old('COD_USUARIO') }}" required|numeric>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('COD_USUARIO')
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
                                                <label for="TIP_USUARIO">TIPO USUARIO</label>
                                                <select name="TIP_USUARIO">
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
                                                <select name="SEX_PERSONA">
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

                                         <div class="col-6">
                                            <div class="form-group">
                                                <label for="IP_ULT_ACCESS">ULTIMO IP CON EL QUE SE INGRESO</label>
                                                <input type="text" class="form-control" id="IP_ULT_ACCESS" name="IP_ULT_ACCESS" placeholder="" value="{{ old('IP_ULT_ACCESS') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('IP_ULT_ACCESS')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> 

                                        <!-- <div class="col-6">
                                            <p>Último IP de Acceso: {{ auth()->user()->IP_ULT_ACCESS }}</p>
                                        </div> -->


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="IP_ULT_ACCESS">IP_ULT_ACCESS</label>
                                                <input type="newdate" class="form-control" id="FEC_REGISTRO" name="FEC_REGISTRO" placeholder="" value="{{ old('FEC_REGISTRO') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('FEC_REGISTRO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="FEC_REGISTRO">FEC_REGISTRO</label>
                                                <input type="newdate" class="form-control" id="FEC_REGISTRO" name="FEC_REGISTRO" placeholder="" value="{{ old('FEC_REGISTRO') }}" required>
                                                <div class="valid-feedback">DATO VALIDO.</div>
                                                <div class="invalid-feedback">LOS CAMPOS NO PUEDEN ESTAR VACIOS.</div>
                                                @error('FEC_REGISTRO')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                                                                                                        
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="btn btn-danger" href="{{ url('personas') }}">Regresar</a>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
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

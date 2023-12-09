@extends('adminlte::page')


@section('title', 'Lista de Personas')

@section('content')
<div class="row">

	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Personas</h3>

	</div>   
    <div style="text-align: center;">
    <button type="button" class="btn btn-info btn-sm mi-boton" data-toggle="modal" data-target="#Modal-create-{{('personas')}}">
        Nueva Persona
    </button>
    @include('dash.createpersona')

 </div>
</div>
<div class='container'>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="table-responsive">

<Table class="table table-sm table-striped table-hover">
<thead class="bg-primary text-white" style="background-color: #8B1E06 !important;">
 <tr>
    <td class="border border-dark">CODIGO PERSONA</td>
    <td class="border border-dark">NUMERO DE IDENTIDAD</td>
    <td class="border border-dark">NOMBRES</td>
    <td class="border border-dark">APELLIDOS</td>
    <td class="border border-dark">SEXO</td>
    <td class="border border-dark">FECHA DE NACIMIENTO</td>
    <td class="border border-dark">TIPO DE ESTADO</td>
    <td class="border border-dark">ESTADO CIVIL</td>
    <td class="border border-dark">CORREO ELECTRONICO</td>
    <td class="border border-dark">CODIGO DE TELEFONO </td>
    <td class="border border-dark">TIPO TELEFONO</td>
    <td class="border border-dark">NUMERO DE TELEFONO</td>
    <td class="border border-dark">IND TELEFONO</td>
    <td class="border border-dark">DESCRIPCION DEL TELEFONO</td>
    <td class="border border-dark">CODIGO DIRECCIÓN</td>
    <td class="border border-dark">DEPARTAMENTO</td>
    <td class="border border-dark">MUNICIPIO</td>
    <td class="border border-dark">COLONIA</td>
    <td class="border border-dark">DESCRIPCION DE DIRECCION</td>
    <td class="border border-dark">COD DE AFILIADO</td>
    <td class="border border-dark">NUMERO DE AFILIADO</td>
    <td class="border border-dark">CODIGO DE BENEFICIARIO</td>
    <td class="border border-dark">NOMBRE BENEFICIARIO</td>
    <td class="border border-dark">PORCENTAJE</td>
    <td class="border border-dark">COD DE USUARIO</td>
    <td class="border border-dark">CONTRASEÑA</td>
    <td class="border border-dark">NOMBRE DE USUARIO</td>
    <td class="border border-dark">TIPO DE USUARIO</td>
    <td class="border border-dark">IND DE USUARIO</td>
    <td class="border border-dark">PRIMER ACCESS</td>
    <td class="border border-dark">IP ULTIMO ACCESS</td>
    <td class="border border-dark">USUARIO DE REGISTRO</td>
    <td class="border border-dark">FECHA DE REGISTRO</td>
</tr>
                    </thead>
        <tbody>
        @foreach ($Resulpersonas as $personas) 
 <tr>

 

                                <td class="inner-table text-center" >{{$personas["COD_PERSONA"]}}</td>
                                <td class="inner-table text-center" >{{$personas["NUM_IDENTIDAD"]}}</td>
                                <td class="inner-table text-center" >{{$personas["NOM_PERSONA"]}}</td>
                                <td class="inner-table text-center" >{{$personas["APE_PERSONA"]}}</td>
                                <td class="inner-table text-center" >{{$personas["SEX_PERSONA"]}}</td>
                                <td class="inner-table text-center" >{{$personas["FEC_NACIMIENTO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["TIP_ESTADO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["ESTADO_CIVIL"]}}</td>
                                <td class="inner-table text-center" >{{$personas["EMAIL"]}}</td>
                                <td class="inner-table text-center" >{{$personas["COD_TELEFONO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["TIP_TELEFONO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["NUM_TELEFONO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["IND_TELEFONO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["DES_TELEFONO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["COD_DIRECCION"]}}</td>
                                <td class="inner-table text-center" >{{$personas["DEPARTAMENTO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["MUNICIPIO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["COLONIA"]}}</td>
                                <td class="inner-table text-center" >{{$personas["DES_DIRECCION"]}}</td>
                                <td class="inner-table text-center" >{{$personas["COD_AFILIADO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["NUM_AFILIADO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["COD_BENEFICIARIO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["NOM_COMPLETO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["PORCENTAJE"]}}</td>
                                <td class="inner-table text-center" >{{$personas["COD_USUARIO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["CONTRASENA"]}}</td>
                                <td class="inner-table text-center" >{{$personas["NOM_USUARIO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["TIP_USUARIO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["IND_USUARIO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["PRI_ACCESS"]}}</td>
                                <td class="inner-table text-center" >{{$personas["IP_ULT_ACCESS"]}}</td>
                                <td class="inner-table text-center" >{{$personas["USR_REGISTRO"]}}</td>
                                <td class="inner-table text-center" >{{$personas["FEC_REGISTRO"]}}</td>
       


                                <td>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Modal-edit-{{$personas['COD_PERSONA']}}"> 
                                    Editar
                                   </button>
                            @include('dash.editp')

                                </td>
                            </tr>
                       
                       
                    @endforeach
                    </tbody>
                     </table>
     </div>
</div>
</div>
</div>

@endsection

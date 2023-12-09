@extends('adminlte::page')

@section('title', 'Lista de Planillas')

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Planillas</h3>
    </div>   
    <div style="text-align: center;">
        <button type="button" class="btn btn-info btn-sm mi-boton" data-toggle="modal" data-target="#Modal-create-{{('planillas')}}">
            Nueva Planilla
        </button>
        @include('dash.create')
    </div>
</div>
<div class='container'>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table id="planillas" class="table table-striped table-bordered table-hover rounded " style="width:100%">
                <thead class="bg-primary text-white" style="background-color: #8B1E06 !important;">
                    <tr>
                        <th>CODIGO PLANILLA</th>
                        <th>CODIGO AFILIADO</th>
                        <th>FECHA DE PAGO</th>
                        <th>DENOMINACION</th>
                        <th>VALOR PAGADO</th>
                        <th>CODIGO PLANILLA</th>
                        <th>VALOR APORTACION MENSUAL</th>
                        <th>USUARIO REGISTRO</th>
                        <th>FECHA REGISTRO</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Resulplanillas as $planillas) 
                        <tr>
                            <td class="inner-table text-center">{{$planillas["COD_PLANILLA"]}}</td>
                            <td class="inner-table text-center">{{$planillas["COD_AFILIADO"]}}</td>
                            <td class="inner-table text-center">{{$planillas["FEC_PAGO"]}}</td>
                            <td class="inner-table text-center">{{$planillas["DENOMINACION"]}}</td>
                            <td class="inner-table text-center">{{$planillas["VAL_PAGADO"]}}</td>
                            <td class="inner-table text-center">{{$planillas["COD_PLANILLA"]}}</td>
                            <td class="inner-table text-center">{{$planillas["VAL_APO_MENSUAL"]}}</td>
                            <td class="inner-table text-center">{{$planillas["USR_REGISTRO"]}}</td>
                            <td class="inner-table text-center">{{$planillas["FEC_REGISTRO"]}}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Modal-edit-{{$planillas['COD_PLANILLA']}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-delete-{{$planillas['COD_PLANILLA']}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('dash.edit')
                        @include('dash.delete')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>


    <script>
      
    </script>
@endsection

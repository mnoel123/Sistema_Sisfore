@extends('adminlte::page')


@section('title', 'Gestionar Planilla')

@section('content')
<div class="row">

	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Gestionar Planillas</h3>

	</div>   
    <div style="text-align: center;">
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal-import-{{('import')}}">
            Importar
        </button>
        @include('dash.import')
 </div>
</div>
<div class='container'>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="table-responsive">


<table id="planillas" Table class="table table-striped table-bordered table-hover rounded">
 <thead class="table-success bg-primary text-white" style="background-color: #8B1E06 !important;">
 <tr>
    <td class="border border-dark">CODIGO PLANILLA</td>
    <td class="border border-dark">CODIGO AFILIADO</td>
    <td class="border border-dark">FECHA DE PAGO</td>
    <td class="border border-dark">DENOMINACION</td>
    <td class="border border-dark">VALOR PAGADO</td>
    <td class="border border-dark">USUARIO REGISTRO</td>
    <td class="border border-dark">FECHA REGISTRO</td>
    <td class="border border-dark">OPCIONES</td>
</tr>
                    </thead>
        <tbody>
        @foreach ($planillas as $planillas) 
 <tr>

                                <td class="inner-table text-center" >{{$planillas["COD_PLANILLA"]}}</td>
                                <td class="inner-table text-center">{{$planillas["COD_AFILIADO"]}}</td>
                                <td class="inner-table text-center">{{$planillas["FEC_PAGO"]}}</td>
                                <td class="inner-table text-center">{{$planillas["DENOMINACION"]}}</td>
                                <td class="inner-table text-center">{{$planillas["VAL_PAGADO"]}}</td>
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
</script>
</div>
</div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.8/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.8/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#planillas').DataTable({
                responsive: true,
                autoWidth: false,
                "language": {
                    "lengthMenu": "Registros por página MENU ",
                    "zeroRecords": "No se encontro registro",
                    "info": "Mostrando la página PAGE de PAGES",
                           "search": "Buscar",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente"
                    },
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(Filtrado de MAX registros totales)"
                },
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]

            });
        });
    </script>
@endsection

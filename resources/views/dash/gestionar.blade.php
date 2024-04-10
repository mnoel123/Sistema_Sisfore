@extends('adminlte::page')

@section('title', 'Gestionar Planilla')

@section('content')
<head>
<link rel="stylesheet" href="{{ ('css/app.css') }}">
</head>



    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-center">
            <h3 style="font-weight: bold;">Gestionar Planillas</h3>
        </div>
    </div>
<div class="row justify-content-end" style="margin-right: 50px;">
    <div class="text-right" style="margin-right: 15px;">
    <button type="button" class="btn btn-purple btn-sm ml-auto " data-toggle="modal" data-target="#Modal-create-planillas">
  <i class="bi bi-plus-square-fill"></i>  Agregar
    </button>
    
@include('dash.createPlanilla')
        <!-- Botón para abrir el modal con icono de importación -->
        <button type="button" class="btn btn-success btn-sm ml-auto" data-toggle="modal" data-target="#Modal-import-{{('import')}}">
            <i class="fas fa-file-import"></i> Importar
        </button>
        <!-- Botón para generar el PDF con icono de PDF -->
        <a href="{{ url('/generar-pdf') }}" class="btn btn-danger btn-sm ml-auto" id="generar-pdf-btn" target="_blank">
            <i class="fas fa-file-pdf"></i> Generar PDF
        </a>
<script>
    document.getElementById('generar-pdf-btn').addEventListener('click', function(event) {
        if (!confirm('¿Estás seguro de que deseas generar el reporte?')) {
            event.preventDefault(); // Evita que el enlace se abra si el usuario cancela la acción
        }
    });
</script>

        @include('dash.import')
    </div>
</div>


           <div class='container'>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="table-responsive">

<div class="row align-items-end">
    <div class="col-md-2 mb-3">
        <label for="fecha_desde">Fecha desde:</label>
        <input type="date" id="fecha_desde" class="form-control">
    </div>
    <div class="col-md-2 mb-3">
        <label for="fecha_hasta">Fecha hasta:</label>
        <input type="date" id="fecha_hasta" class="form-control">
    </div>
    <div class="col-md-2 mb-3">
        <button type="button" id="filtrar" class="btn btn-md btn-vino py-0" style="height: 38px;">
            <i class="fas fa-search"></i> 
        </button>
        <button type="button" id="actualizar" class="btn btn-md btn-info py-0" style="height: 38px;">
            <i class="fas fa-sync-alt"></i> 
        </button>
    </div>
</div>
   


<table id="planillas" Table class="table table-striped table-bordered table-hover rounded"  >
 <thead class="bg-primary text-white" style="background-color: #8B1E06 !important;">
 <tr>
    <td class="border border-dark">ID PLANILLA</td>
    <td class="border border-dark">CODIGO AFILIADO</td>
    <td class="border border-dark">NUMERO AFILIADO</td>
    <td class="border border-dark">NOMBRE COMPLETO</td>
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
                                <td class="inner-table text-center">{{$planillas["NUM_AFILIADO"]}}</td>
                                <td class="inner-table text-center">{{$planillas["NOM_COMPLETO"]}}</td>
                                <td class="inner-table text-center">{{$planillas["FEC_PAGO"]}}</td>
                                <td class="inner-table text-center">{{$planillas["DENOMINACION"]}}</td>
                                <td class="inner-table text-center">{{$planillas["VAL_PAGADO"]}}</td>
                                <td class="inner-table text-center">{{$planillas["USR_REGISTRO"]}}</td>
                                <td class="inner-table text-center">{{$planillas["FEC_REGISTRO"]}}</td>
      
<td>
    <button type="button" class="btn btn-warning btn-sm custom-btn" data-toggle="modal" data-target="#Modal-edit-{{$planillas['COD_PLANILLA']}}">
        <i class="fas fa-edit"></i> Editar
    </button>
    
    <button type="button" class="btn btn-secondary btn-sm custom-btn" data-toggle="modal" data-target="#modal-delete-{{$planillas['COD_PLANILLA']}}">
        <i class="fas fa-trash-alt"></i> Eliminar
    </button>
</td>


                            @include('dash.edit')
                            @include('dash.delete')
                            </td>
                            </tr>
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
    <script>
        $(document).ready(function() {
            var table = $('#planillas').DataTable({
                responsive: true,
                autoWidth: false,
                "language": {
                    "lengthMenu": "Registros por página _MENU_ ",
                    "zeroRecords": "No se encontró registro",
                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                    "search": "Buscar",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente"
                    },
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)"
                },
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });

            $('#filtrar').click(function() {
                var fecha_desde = $('#fecha_desde').val();
                var fecha_hasta = $('#fecha_hasta').val();

                table.columns(4).search(fecha_desde);
                table.columns(4).draw();

                table.columns(4).search(fecha_hasta);
                table.columns(4).draw();
            });

            $('#actualizar').click(function() {
                table.search('').columns().search('').draw();
            });
        });
    </script>
@endsection


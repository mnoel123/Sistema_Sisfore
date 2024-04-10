@extends('adminlte::page')
@section('content')
<head>
<link rel="stylesheet" href="{{ ('css/app.css') }}">
</head>
<div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-center">
            <h3 style="font-weight: bold;">Bitácora</h3>
        </div>
    </div>
<div class="content">
        <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 font-weight-bold">
        </div>
        <div class="col-md-6 col-sm-12">
    <h5 id="fechaActual" style="text-align: right; margin-right: 30px; font-weight: bold;"></h5>
</div>

<script>
    // Obtener la fecha actual
    var fechaActual = new Date();

    // Formatear la fecha como "dd/MM/yyyy"
    var opcionesFormato = { day: 'numeric', month: 'numeric', year: 'numeric' };
    var fechaFormateada = fechaActual.toLocaleDateString('es-ES', opcionesFormato);

    // Mostrar la fecha actualizada en el elemento con id "fechaActual"
    document.getElementById('fechaActual').textContent = 'Fecha: ' + fechaFormateada;
</script>


              <div class='content'>
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

<table id="bitacora" Table class="table table-striped table-bordered table-hover rounded">

<thead class="bg-primary text-white" style="background-color: #8B1E06 !important;">
<!-- <thead class="bg-primary text-white"> -->
    
    <tr>
                        <th>BITACORA</th>
                        <th>TABLA</th>
                        <th>TIPO EVENTO</th>
                        <th>FECHA EVENTO</th>
                        <th>HORA EVENTO</th>
                        <!-- <th>IND_EVENTO</th> -->
                        <th>DESCRIPCION EVENTO</th>
                        <th>USUARIO REGISTRO</th>
                        <th>FECHA REGISTRO</th>
</tr>
                    </thead>
        <tbody>
        @foreach ($GetAll_bitacora as $Bitacora) 
 <tr>
                                <td class="inner-table">{{$Bitacora["COD_BITACORA"]}}</td>
                                <td class="inner-table">{{$Bitacora["NOM_TABLA"]}}</td>
                                <td class="inner-table">{{$Bitacora["TIP_EVENTO"]}}</td>
                                <td class="inner-table">{{$Bitacora["FEC_EVENTO"]}}</td>
                                <td class="inner-table">{{$Bitacora["HOR_EVENTO"]}}</td>
                                <!-- <td class="inner-table">{{$Bitacora["IND_EVENTO"]}}</td> -->
                                <td class="inner-table">{{$Bitacora["DES_EVENTO"]}}</td>
                                <td class="inner-table">{{$Bitacora["USR_REGISTRO"]}}</td>
                                <td class="inner-table">{{$Bitacora["FEC_REGISTRO"]}}</td>
                      
                                
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
            var table = $('#bitacora').DataTable({
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


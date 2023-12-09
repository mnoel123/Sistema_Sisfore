@extends('adminlte::page')
@section('content')
<div class="content">
        <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 font-weight-bold">
        <th><h3>Bitacora</h3></th>
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
    <script src="https://cdn.datatables.net/responsive/2.2.8/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.8/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#bitacora').DataTable({
                responsive: true,
                autoWidth: false,
                "language": {
                    "lengthMenu": "Registros por página _MENU_ ",
                    "zeroRecords": "No se encontro registro",
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
        });
    </script>
@endsection
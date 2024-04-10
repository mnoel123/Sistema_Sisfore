@extends('adminlte::page')

@section('title', 'Gestionar Usuarios')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-center">
            <h3 style="font-weight: bold;">Gestionar Usuarios</h3>
        </div>
    </div>

    <div class="row justify-content-end" style="margin-right: 50px;">
    <div style="text-align: center;">
        
        <!-- Botón para generar el PDF -->
        <a href="{{ url('/generar-pdf') }}" class="btn btn-danger btn-sm ml-auto" target="_blank" style="color: black; font-weight: bold;">
            Generar PDF
       
    </div>


           <div class='container'>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="table-responsive">


<table id="planillas" Table class="table table-striped table-bordered table-hover rounded"  >
 <thead class="bg-primary text-white" style="background-color: #8B1E06 !important;">
 <tr>
    <td class="border border-dark">N</td>
    <td class="border border-dark">NOMBRE COMPLETO</td>
    <td class="border border-dark">NOMBRE USUARIO</td>
    <td class="border border-dark">CORREO</td>
    <td class="border border-dark">FECHA REGISTRO</td>
    <td class="border border-dark">OPCIONES</td>
</tr>
                    </thead>
        <tbody>
        @foreach ($users as $users) 
 <tr>

                                <td class="inner-table text-center" >{{$users["ID"]}}</td>
                                <td class="inner-table text-center">{{$users["NAME"]}}</td>
                                <td class="inner-table text-center">{{$users["NOM_USUARIO"]}}</td>
                                <td class="inner-table text-center">{{$users["EMAIL"]}}</td>
                                <td class="inner-table text-center">{{$users["FEC_REGISTRO"]}}</td>
                      <td>
    <button type="button" class="btn btn-danger btn-sm btn-block" data-toggle="modal" data-target="#Modal-edit-{{$users['ID']}}">
        Editar
    </button>
    <button type="button" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#modal-delete-{{$users['ID']}}">
        Eliminar
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
    <script src="https://cdn.datatables.net/responsive/2.2.8/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.8/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#planillas').DataTable({
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





@extends('adminlte::page')

@section('title', 'Estados Financieros')

@section('content_header')
    <h1 class="m-0 text-dark">Cuentas</h1>
@stop

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 font-weight-bold">
                <h3>Listado de Cuentas</h3>
            </div>
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

        <div class="content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                <table id="cuentas" class="table table-striped table-bordered table-hover rounded">
                    <thead class="bg-primary text-white" style="background-color: #8B1E06 !important;">
                        <tr>
                            <th>N° Cuenta</th>
                            <th>N° Subcuenta</th>
                            <th>N° Balance General</th>
                            <th>Cuentas Mayores</th>
                            <th>Cantidad Subcuenta</th>
                            <th>Movimiento</th>
                            <th>Tipo de Cuenta</th>
                            <th>Nombre de cuenta</th>
                            <th>Usuario registrado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($SEL_CUENTAS as $cuentas)
                        <tr>
                            <td class="inner-table">{{$cuentas["COD_CUENTA"]}}</td>
                            <td class="inner-table">{{$cuentas["COD_SUBCUENTA"]}}</td>
                            <td class="inner-table">{{$cuentas["COD_BALANCE"]}}</td>
                            <td class="inner-table">{{$cuentas["COD_CTA_MAYORES"]}}</td>
                            <td class="inner-table">{{$cuentas["NUM_SUBCUENTA"]}}</td>
                            <td class="inner-table">{{$cuentas["MOVIMIENTO"]}}</td>
                            <td class="inner-table">{{$cuentas["TIP_CUENTA"]}}</td>
                            <td class="inner-table">{{$cuentas["NOM_SUBCUENTA"]}}</td>
                            <td class="inner-table">{{$cuentas["USR_REGISTRO"]}}</td>
                            <td>   
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#Modal-edit-{{$cuentas['COD_CUENTA']}}">Editar
                                </button>
                                   
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#modal-delete-{{$cuentas['COD_CUENTA']}}">Eliminar</button>
                            
                            </td>
                            
                        </tr>
                        @include('dash.cuentas-delete')
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <div class="class">
        <div style="text-align: center;">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Modal-create-{{('cuentas')}}">
                Nueva Cuenta
            </button> @include('dash.cuentas-crear')
            
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
        $(document).ready(function () {
            $('#cuentas').DataTable({
                responsive: true,
                autoWidth: true,
                language: {
                    lengthMenu: "Registros por página _MENU_",
                    zeroRecords: "No se encontraron registros",
                    info: "Mostrando página _PAGE_ de _PAGES_",
                    search: "Buscar",
                    paginate: {
                        previous: "Anterior",
                        next: "Siguiente"
                    },
                    infoEmpty: "No hay registros",
                    infoFiltered: "(Filtrado de _MAX_ registros totales)"
                },
                lengthMenu: [
                    [5, 10, 50, -1],
                    [5, 10, 50, "Todos"]
                ]
            });
        });
    </script>
@stop

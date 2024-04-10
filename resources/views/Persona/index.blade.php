@extends('adminlte::page')
@section('title', 'Personas')
@section('content_header')
<h1>Tipo de Persona</h1>
@stop
@section('content')
<head>
<link rel="stylesheet" href="{{ ('css/app.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" type="text/css"> <!-- Bootstrap CSS -->
  <script src="//code.jquery.com/jquery-3.7.0.js" type="text/javascript"></script> <!-- jQuery -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" type="text/css"> <!-- DataTables CSS -->
  <link rel="stylesheet" href="//cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" type="text/css"> <!-- DataTables Buttons CSS -->
  <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" type="text/javascript"></script> <!-- DataTables JavaScript -->
  <script src="//cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js" type="text/javascript"></script> <!-- DataTables Buttons JavaScript -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" type="text/javascript"></script> <!-- JSZip (Required for DataTables Buttons) -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script> <!-- pdfmake (Required for DataTables Buttons) -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script> <!-- vfs_fonts (Required for DataTables Buttons PDF Export) -->
  <script src="//cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js" type="text/javascript"></script> <!-- DataTables Buttons HTML5 -->
  <script src="//cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js" type="text/javascript"></script> <!-- DataTables Buttons Print -->
</head>

  <main class="mt-3">
 
    <a href="{{ route('Persona.create') }}" class="btn btn-primary mb-3">Agregar persona</a>

    <table id="mitabla" class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>DNI</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>FN</th>
          <th>Estado</th>
          <th>Estado civil</th>
          <th>email</th>
          
          <th>Acciones</th>
         
        </tr>
      </thead>
      <tbody>
        @foreach ($personas as $persona)
        <tr>
          <td>{{ $persona['COD_PERSONA'] }}</td>
          <td>{{ $persona['NUM_IDENTIDAD'] }}</td>
          <td>{{ $persona['NOM_PERSONA'] }}</td>
          <td>{{ $persona['APE_PERSONA'] }}</td>
          <td>{{ date('d/m/Y', strtotime($persona['FEC_NACIMIENTO'])) }}</td>
          <td>{{ $persona['TIP_ESTADO'] }}</td>
          <td>{{ $persona['ESTADO_CIVIL'] }}</td>
          <td>{{ $persona['EMAIL'] }}</td>
         
          <td>
            <form action="{{ route('Persona.destroy', $persona['COD_PERSONA']) }}" method="POST" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button type="submit"class="btn btn-secondary btn-sm custom-btn"><i class="fas fa-trash-alt"></i>Eliminar</button>
            </form>
          </td>
      
        </tr>
        @endforeach
      </tbody>
    </table>
    <script>
    new DataTable('#mitabla', {
    language: {
    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-MX.json',
    },
    dom: 'Bfrtip',
    buttons:{
    buttons:[
    { extend: 'copy', text: '<i class="bi bi-clipboard-check-fill"></i>',titleAttr:'Copiar',className :'btn btn-secondary' },
    { extend: 'excel', text: '<i class="bi bi-file-earmark-spreadsheet"></i>',titleAttr:'Exportar a Excel',className:'btn btn-succes' },
    { extend: 'csv', text: '<i class="bi bi-filetype-csv"></i>',titleAttr:'Exportar a csv',className:'btn btn-succes' },
    { extend: 'pdf', text: '<i class="bi bi-file-earmark-pdf"></i>',titleAttr:'Exportar a PDF',className:'btn btn-danger' },
    { extend: 'print', text: '<i class="bi bi-printer"></i>',titleAttr:'Imprimir',className:'btn btn-info' },
    ]
    },
    /*buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],*/
    });
    </script>
    @stop
    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    @section('js')
    @stop
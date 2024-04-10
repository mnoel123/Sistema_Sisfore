@extends('adminlte::page')
@section('title', 'Parametros')
@section('content_header')
<h1>Lista de Parametros</h1>
@stop
@section('content')

<style>
    /* Estilos para los botones */
    .btn-warning,
    .btn-secondary {
        width: 88px; /* Establece un ancho específico para los botones */
        height: 30px; /* Establece una altura específica para los botones */
        margin-bottom: 5px; /* Agrega un margen inferior de 10px para separar los botones */
        /* Otros estilos según sea necesario */
    }
    .btn-purple {
    background-color: purple;
    color: white; /* Cambia el color del texto si es necesario para que sea legible */
    /* Otros estilos según sea necesario */
}
</style>
 
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




<div class="container">
  <main class="mt-3">
    
    <a href="{{ route('Parametros.create') }}" class="btn btn-primary mb-3">Crear Parametro</a>
   
    <table id="mitabla" class="table table-striped">
      <thead>
        <tr>
          <th>Parametro</th>
          <th>valor</th>
          <th>Creacion</th>
          <th>Creado por</th>
          <th>Modificado</th>
           <th>Modificado por</th>
           
          <th>Acciones</th>
      
        </tr>
      </thead>
      <tbody>
        @foreach ($parametros as $parametro)
        <tr>
          <td>{{ $parametro['parametro'] }}</td>
          <td>{{ $parametro['valor'] }}</td>
          <td>{{ date('d/m/Y', strtotime($parametro['fecha_creacion'])) }}</td>
          <td>{{ $parametro['creado_por'] }}</td>
          <td>{{ date('d/m/Y', strtotime($parametro['fecha_modificacion'])) }}</td>
          <td>{{ $parametro['modificado_por'] }}</td>
          
          <td>
            <a href="{{ route('Parametros.edit', $parametro['id']) }}" class="btn btn-warning btn-sm custom-btn"  ><i class="fas fa-edit"></i>Editar</a>
            <form action="{{ route('Parametros.destroy', $parametro['id']) }}" method="POST" style="display: inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-secondary btn-sm custom-btn"><i class="fas fa-trash-alt"></i>Eliminar</button>
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
                { extend: 'copy', text: '<i class="bi bi-clipboard-check-fill"></i>',titleAttr:'Copiar',className:'btn btn-secondary' },
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Usuario</title>
    <!-- Estilos para el PDF (puedes ajustar según tus necesidades) -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #encabezadoPDF {
            text-align: center;
            padding: 10px;
        }

        #encabezadoPDF img {
            max-width: 180px;
            max-height: 130px;
        }

        #piePagina {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f0f0f0;
            padding: 10px;
            text-align: left;
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
            font-size: 12px;
        }

        th {
            background-color: #8B1E06;
            color: white;
            font-weight: bold;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        .table-bordered th, .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-hover tbody tr:hover {
            background-color: #e9ecef;
        }

        .rounded {
            border-radius: 8px;
        }

        /* Estilos para el pie de página */
        #piePagina {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: right;
            padding: 10px;
            background-color: #f2f2f2;
            border-top: 1px solid #ccc;
        }

        #piePagina span {
            float: right; /* Mueve el texto al lado derecho */
        }
    </style>
</head>
<body>
    <!-- Encabezado y logo para el PDF -->
    <div id="encabezadoPDF">
        <img src="{{ public_path('img/logo_s.png') }}" alt="Logo">
        <h1>FONDO DE RETIRO EMPLEADOS STIBYS</h1>
        <h4>Edificio STIBYS, Tel: 22341176</h4>
        <h2>Gestionar Planillas</h2>
    </div>
    
    <table class="table table-striped table-bordered table-hover rounded">
        <thead class="bg-primary text-white">
            <tr>
            <th>ID</th>
          <th>Nombre</th>
          <th>Estado</th>
          <th>Correo</th>
          <th>Creacion</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
          <td>{{ $usuario['id'] }}</td>
          <td>{{ $usuario['name'] }}</td>
          <td>{{ $usuario['estado'] }}</td>
          <td>{{ $usuario['email'] }}</td>
          <td>{{ date('d/m/Y', strtotime($usuario['created_at'])) }}</td>
            @endforeach
        </tbody>
    </table>
    <!-- Pie de página -->
<div id="piePagina">
    <span>Reporte generado el <?php echo date("d/m/Y H:i:s"); ?>.</span>
</div>

</body>
</html>

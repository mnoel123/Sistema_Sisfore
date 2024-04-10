<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Planillas</title>
    <!-- Estilos para el PDF (puedes ajustar según tus necesidades) -->
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 10px; /* Reducir el tamaño de la fuente */
        }

        #encabezadoPDF {
            text-align: center;
            padding: 10px;
        }

        #encabezadoPDF img {
            max-width: 180px;
            max-height: 130px;
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #000;
            padding: 2px; /* Reducir el padding */
            text-align: center;
            font-size: 8px; /* Reducir el tamaño de la fuente */
        }

        th {
            background-color: #8B1E06;
            color: white;
            font-weight: bold;
        }

        /* Estilos para el pie de página */
        #piePagina {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: right;
            padding: 5px; /* Reducir el padding */
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
        <h2>Listado de Planillas</h2>
    </div>

    <!-- Datos de las planillas -->
    <table class="table table-striped table-bordered table-hover rounded">
        <thead class="bg-primary text-white">
            <tr>
                <th>ID PLANILLA</th>
                <th>CODIGO AFILIADO</th>
                <th>NUMERO AFILIADO</th>
                <th>NOMBRE COMPLETO</th>
                <th>FECHA DE PAGO</th>
                <th>DENOMINACION</th>
                <th>VALOR PAGADO</th>
                <th>VALOR APORTACION MENSUAL</th>
                <th>USUARIO REGISTRO</th> <!-- Columna añadida -->
                <th>FECHA REGISTRO</th> <!-- Columna añadida -->
            </tr>
        </thead>
        <tbody>
            @foreach ($planillas as $planilla)
                <tr>
                    <td>{{ $planilla['COD_PLANILLA'] }}</td>
                    <td>{{ $planilla['COD_AFILIADO'] }}</td>
                    <td>{{ $planilla['NUM_AFILIADO'] }}</td>
                    <td>{{ $planilla['NOM_COMPLETO'] }}</td>
                    <td>{{ $planilla['FEC_PAGO'] }}</td>
                    <td>{{ $planilla['DENOMINACION'] }}</td>
                    <td>{{ $planilla['VAL_PAGADO'] }}</td>
                    <td>{{ $planilla['VAL_APO_MENSUAL'] }}</td>
                    <td>{{ $planilla['USR_REGISTRO'] }}</td>
                    <td>{{ date('Y-m-d H:i:s') }}</td> <!-- Mostrar fecha y hora actuales -->
                </tr>
            @endforeach
        </tbody>
    </table>
  <!-- Pie de página -->
<div id="piePagina">
    <span>Reporte generado el <?php echo date("d/m/Y H:i:s"); ?>.</span>
</div>
</body>
</html>

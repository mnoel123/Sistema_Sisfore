@extends('adminlte::page')

@section('content')     
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Biblioteca para exportar a PDF -->
<script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>


<div id="acciones">
  <button onclick="imprimirTabla()" class="btn btn-primary text-white" style="background-color: #8B1E06 !important;">Imprimir</button>
  <!-- <button onclick="exportarPDF()">Exportar a PDF</button> -->

</div>

<!-- Encabezado y logo para el PDF -->
<div id="encabezadoPDF" style="text-align: center; padding: 10px;">
  <img src="img/logo_s.png" alt="Logo" style="max-width: 180px; max-height: 130px;">
  <h1>FONDO DE RETIRO EMPLEADOS STIBYS</h1>
  <h4>Edificio STIBYS,   Tel: 22341176</h4>
  <h2>ESTADO DE CUENTA</h2>

  


</div>

   <!--SUMA DE SALDOS-->

<body>
<div class="mt-3">
    <button id="sumarSaldos" class="btn btn-primary text-white" style="background-color: #8B1E06 !important;">Saldo Total <strong>  :  L. <span id="resultadoSaldos">0.00</span></strong> 
    <div id="totalSaldos" class="ml-3">
       
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#sumarSaldos').on('click', function () {
            var sumaSaldos = 0;

            // Iterar sobre las filas de la tabla y sumar los saldos
            $('#reportesa tbody tr').each(function () {
                var saldo = parseFloat($(this).find('.saldo').text().replace(',', '')) || 0;
                sumaSaldos += saldo;
            });

            // Mostrar la suma en el recuadro de total
            $('#resultadoSaldos').text(sumaSaldos.toFixed(2));
        });
    });
</script>
</body>

 <!--TABLA-->

<table id="reportesa" class="table table-striped mt-0.5 table-bordered shadow-lg mt-4" >
<!-- <thead class="bg-primary text-white" style="background-color: red !important;"> -->

<thead class="bg-primary text-white" style="background-color: #8B1E06 !important;">

    <!-- <thead class="bg-primary text-white"> -->
        <tr>
            <th>COD_AFILIADO</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>FECHA DE PAGO</th>
            <th>PLANILLA</th>
            <th>DEPÓSITO</th>
            <th>INTERES</th>
            <th>SALDO</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Reportes as $Reporte)
            <tr>
                <td class="inner-table">{{$Reporte["COD_AFILIADO"]}}</td>
                <td class="inner-table">{{$Reporte["NOM_PERSONA"]}}</td>
                <td class="inner-table">{{$Reporte["APE_PERSONA"]}}</td>
                <td class="inner-table">{{$Reporte["FEC_PAGO"]}}</td>
                <td class="inner-table">{{$Reporte["COD_PLANILLA"]}}</td>
                <td class="inner-table">{{$Reporte["VAL_PAGADO"]}}</td>
                <td class="inner-table">{{$Reporte["INTERES"]}}</td>
                <td class="inner-table saldo">{{$Reporte["SALDO"]}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- ------------------------------------------------------------------------ -->




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<canvas id="paymentChart" width="100" height="50"></canvas>

<script>

    document.addEventListener("DOMContentLoaded", function () {
        // Extract data from the table
        var labels = [];
        var depositData = [];

        document.querySelectorAll("#reportesa tbody tr").forEach(function (row) {
            var fullName = row.querySelector(".inner-table:nth-child(2)").textContent + ' ' + row.querySelector(".inner-table:nth-child(3)").textContent;
            labels.push(fullName);
            depositData.push(parseFloat(row.querySelector(".inner-table:nth-child(6)").textContent));
        });

        // Create a bar chart
        var ctx = document.getElementById("paymentChart").getContext("2d");
        var myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: labels,
                datasets: [
                    {
                        label: "Deposit",
                        data: depositData,
                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                        borderColor: "rgba(75, 192, 192, 1)",
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    });
</script>



<!-- <script>

    document.addEventListener("DOMContentLoaded", function () {
        // Extract data from the table
        var labels = [];
        var depositData = [];

        document.querySelectorAll("#reportesa tbody tr").forEach(function (row) {
            var fullName = row.querySelector(".inner-table:nth-child(2)").textContent + ' ' + row.querySelector(".inner-table:nth-child(3)").textContent;
            labels.push(fullName);
            depositData.push(parseFloat(row.querySelector(".inner-table:nth-child(6)").textContent));
        });

        // Create a bar chart
        var ctx = document.getElementById("paymentChart").getContext("2d");
        var myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: labels,
                datasets: [
                    {
                        label: "Deposit",
                        data: depositData,
                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                        borderColor: "rgba(75, 192, 192, 1)",
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    });
</script> -->




<script>
  function imprimirTabla() {
    window.print();
  }
  function exportarPDF() {
    var element = document.getElementById('reportesa');
    var options = {
      margin: 10, // Márgenes del PDF
      filename: 'Reportes.pdf', // Nombre del archivo PDF
      image: { type: 'jpeg', quality: 0.98 }, // Calidad de las imágenes en el PDF
      html2canvas: { scale: 2 }, // Escala para mejorar la calidad de las imágenes
      jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }, // Configuración de jsPDF
      pagebreak: { before: '.break-before', after: ['.break-after'] }, // Control de saltos de página
      header: [{ text: document.getElementById('encabezadoPDF').innerHTML, alignment: 'center' }] // Encabezado del PDF
    };
    html2pdf(element, options);
  }
</script>

@endsection





@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.8/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.8/js/responsive.bootstrap4.min.js"></script>

    
    <script>
        $(document).ready(function() {
            $('#reportesa').DataTable({
                responsive: true,
                autoWidth: false,
                "language": {
                    "lengthMenu": "Registros por página _MENU_ ",
                    "zeroRecords": "No se encontro registro",
                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                           "search": "Afiliado",
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
                ],
                
                

            });
        });
    </script> 
@endsection
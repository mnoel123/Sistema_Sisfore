<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use App\Models\Planillas;
use PDF;

class ReporteListaPController extends Controller
{
    public function index()
    {
        // Leer los datos de la API
        $rutaApi = 'http://localhost:3000/aportaciones/planillas';
        $response = Http::get($rutaApi);
        $planillas = $response->json(); // Convertir la respuesta JSON a un array

        // Renderizar la vista 'dash.planillas' con los datos obtenidos de la API
        return view('dash.planillas', ['planillas' => $planillas]);
    }

    public function generarPdf()
    {
        // Obtén los datos de la API
        $rutaApi = 'http://localhost:3000/aportaciones/planillas';
        $response = Http::get($rutaApi);
        $planillas = $response->json(); // Convertir la respuesta JSON a un array

        // Lógica para obtener el número de página actual
        $pageNumber = 1; // Por ahora lo establecemos en 1, reemplázalo con la lógica correcta

        // Pasar los datos a la vista del PDF
        $data = [
            'planillas' => $planillas,
            'pageNumber' => $pageNumber,
        ];

        // Generar el PDF y devolverlo al usuario
        $pdf = PDF::loadView('dash.reportelistaP', $data);
        return $pdf->stream('reporte_Listadeplanillas.pdf');
    }
}

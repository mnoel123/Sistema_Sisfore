<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use App\Models\Planillas;
use PDF; // Importa la fachada sin el alias

class ReportePlanillasController extends Controller
{
    public function generarPdf()
    {
        // Obtén los datos que necesitas para el PDF (puedes pasar los datos necesarios aquí)
        $planillas = Planillas::all(); // Obtener las planillas, asegúrate de tener el modelo Planilla definido
        
        // Aquí podrías tener la lógica para obtener el número de página actual
        $pageNumber = 1; // Por ahora lo establecemos en 1, reemplázalo con la lógica correcta

        $data = [
            'planillas' => $planillas,
            'pageNumber' => $pageNumber, // Pasamos el número de página a la vista
        ];

        $pdf = PDF::loadView('dash.ReportePlanillas', $data);

        // Utiliza la función stream() para generar y devolver el PDF
        return $pdf->stream('reporte_gestionarplanillas.pdf');
    }
}

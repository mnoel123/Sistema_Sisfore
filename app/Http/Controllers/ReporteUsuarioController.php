<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use App\Models\user;
use PDF; // Importa la fachada sin el alias

class ReporteUsuarioController extends Controller
{
    public function generarPdf()
    {
        // Obtén los datos que necesitas para el PDF (puedes pasar los datos necesarios aquí)
        $usuaurios = usuarios::all(); // Obtener las planillas, asegúrate de tener el modelo Planilla definido
        
        // Aquí podrías tener la lógica para obtener el número de página actual
        $pageNumber = 1; // Por ahora lo establecemos en 1, reemplázalo con la lógica correcta

        $data = [
            'usuarios' => $usuarios,
            'pageNumber' => $pageNumber, // Pasamos el número de página a la vista
        ];

        $pdf = PDF::loadView('Usuarios.reporteusuario', $data);

        // Utiliza la función stream() para generar y devolver el PDF
        return $pdf->stream('reporte_usuario.pdf');
    }
}

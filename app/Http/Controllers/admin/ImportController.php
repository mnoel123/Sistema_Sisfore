<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\planillas;
use App\Imports\planillasImport;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import()
    {
        return view('dash.import');
    }

    public function importData(Request $request)
    {
        // Validar el archivo de importación
        $validator = Validator::make($request->all(), [
            'excel' => 'required|file|mimes:xlsx,xls'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            Excel::import(new planillasImport, $request->file('excel'));

            // Después de la importación exitosa, establecer el mensaje de sesión
            Session::flash('import_success', 'La planilla se importó exitosamente.');

            return redirect()->route('gestionar')->with('success', 'Datos importados correctamente.');
        } catch (\Exception $e) {
            // Verificar si la excepción es debido a una violación de clave externa
            if ($e->getCode() === '23000') {
                // Mostrar una alerta de JavaScript al usuario
                $errorMessage = "No se puede importar la fila porque el código de afiliado especificado no es válido.";
                return redirect()->back()->with('error', $errorMessage);
            } else {
                // Si es otro tipo de excepción, mostrar un mensaje genérico de error
                return redirect()->back()->with('error', 'Se ha producido un error durante la importación de datos.');
            }
        }
    }

    public function gestionar()
    {
        return view('dash.gestionar');
    }

    public function obtenerplanilla()
    {
        $planillas = planillas::all();
        return view('dash.gestionar')->with('planillas', $planillas);
    }

    public function eliminargestionar($COD_PLANILLA)
    {
        $planillas = planillas::findOrFail($COD_PLANILLA);
        $planillas->delete();

        return redirect()->route('gestionar')->with('delete_success', 'Registro eliminado exitosamente.');
    }
}

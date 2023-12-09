<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
############Incluimos Http###########
use Illuminate\Support\Facades\Http;
#####################################
use Illuminate\Http\Request;
use App\Models\planillas;
use App\Imports\planillasImport;
use Maatwebsite\Excel\Facades\Excel;


class ImportController extends Controller
{
    public function import()
    {
     return view('dash.import');
    }


 public function importData(Request $request)
 {
   
         Excel::import(new planillasImport, request()->file('excel'));
 
         return redirect()->to(url('gestionar'))->with('success', 'Datos importados correctamente.');
 }

    public function gestionar()
    {
     return view('dash.gestionar');
    }

    public function obtenerplanilla()
    {

$planillas = planillas::all();

return view('dash.gestionar')->with('planillas',$planillas);
   
    }









public function eliminargestionar($COD_PLANILLA)
{
    $planillas=planillas::findOrFail($COD_PLANILLA);
    $planillas->delete();
    //$planillas = Http::delete('http://localhost:3000/planillas'. $COD_PLANILLA);

    return redirect()-> route('gestionar')->with('eliminado','El registro fue eliminado correctamente'); 
}

}



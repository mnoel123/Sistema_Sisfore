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
use Illuminate\Support\Facades\DB;

class PlanillasController extends Controller
{
    public function index()//leer todos los registros
    {
        $rutaApi =('http://localhost:3000/aportaciones/planillas');
        $response=Http::get($rutaApi);
        $decode=json_decode($response,true);
        return view('dash.planillas')->with('Resulplanillas',$decode);
       

    }

    public function create()//para abrir formularios
    {
        //

        return view('dash.createPlanilla');


    }

   public function store(Request $request)
   {         

       $planillas = Http::post('http://localhost:3000/aportaciones/planillas', [
           'OPERACION'=> $request->OPERACION,
           'COD_AFILIADO' => $request->COD_AFILIADO,
           'NUM_AFILIADO' => $request->NUM_AFILIADO,
           'NOM_COMPLETO' => $request->NOM_COMPLETO,
           'FEC_PAGO' => $request->FEC_PAGO,
           'DENOMINACION'=> $request->DENOMINACION,
           'VAL_PAGADO' => $request->VAL_PAGADO,
           'COD_PLANILLA' => $request->COD_PLANILLA,
           'VAL_APO_MENSUAL' => $request->VAL_APO_MENSUAL,
           'USR_REGISTRO' => $request->USR_REGISTRO,         
       ]); 
       
          return redirect()-> route('gestionar')->with('agregado','El Regristro fue agregados correctamente'); 

        
   }

   public function show($COD_PLANILLA)
   {

    return view('dahs.show',['planillas'=>planillas::findOrFaild($COD_PLANILLA)]);
     
   }
   
   public function edit($COD_PLANILLA)
   {
      $planillas = planillas::findOrFail($COD_PLANILLA);
        
      return view('dash.edit', compact('planillas'));
   }
   
 
   public function update(Request $request,$COD_PLANILLA)
   {
    $planillas = planillas::find($COD_PLANILLA);
    $planillas ->COD_AFILIADO=$request->input('COD_AFILIADO');
    $planillas ->NUM_AFILIADO=$request->input('NUM_AFILIADO');
    $planillas ->NOM_COMPLETO=$request->input('NOM_COMPLETO');
    $planillas ->FEC_PAGO=$request->input('FEC_PAGO');
    $planillas ->DENOMINACION=$request->input('DENOMINACION');
    $planillas ->VAL_PAGADO=$request->input('VAL_PAGADO');
    $planillas ->COD_PLANILLA=$request->input('COD_PLANILLA');
    $planillas ->USR_REGISTRO=$request->input('USR_REGISTRO');
    $planillas ->save();
    

       return redirect()-> route('gestionar')->with('editado','El registro fue editado correctamente');
       
       
   }





   /*
   public function update(Request $request,$COD_PLANILLA)
   {
    $planillas = planillas::findOrFail($COD_PLANILLA);
    $planillas = Http::put('http://localhost:3000/aportaciones/planillas/'.$COD_PLANILLA, [
    'OPERACION'=> $request->OPERACION,
    'COD_AFILIADO' => $request->COD_AFILIADO,
    'FEC_PAGO' => $request->FEC_PAGO,
    'DENOMINACION'=> $request->DENOMINACION,
    'VAL_PAGADO' => $request->VAL_PAGADO,
    'COD_PLANILLA' => $request->COD_PLANILLA,
    'VAL_APO_MENSUAL' => $request->VAL_APO_MENSUAL,
    'USR_REGISTRO' => $request->USR_REGISTRO, 
]); 

       return redirect()-> route('planillas')->with('editado','los registros fue editado correctamente'); 
   }
*/

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy($COD_PLANILLA)
    {
        $planillas = planillas::findOrFail($COD_PLANILLA);
        $deletedPersonName = $planillas->NOM_COMPLETO; // Obtener el nombre de la persona antes de eliminar el registro
        $planillas->delete();
    
        return redirect()->route('gestionar')->with(['delete_success' => 'Registro de "' . $deletedPersonName . '" eliminado exitosamente.', 'deleted_person_name' => $deletedPersonName]);
    }
    
}
    



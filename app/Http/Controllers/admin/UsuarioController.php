<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
############Incluimos Http###########
use Illuminate\Support\Facades\Http;
#####################################
use Illuminate\Http\Request;
use App\Models\user;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function index()//leer todos los registros
    {
        $rutaApi =('http://localhost:3000/aportaciones/planillas');
        $response=Http::get($rutaApi);
        $decode=json_decode($response,true);
        return view('dash.users')->with('Resulusers',$decode);
       

    }

    public function create()//para abrir formularios
    {
        //

        return view('dash.create');


    }

   public function store(Request $request)
   {         

       $planillas = Http::post('http://localhost:3000/aportaciones/planillas', [
           'OPERACION'=> $request->OPERACION,
           'ID' => $request->ID,
           'NAME' => $request->NAME,
           'NOM_USUARIO' => $request->NOM_USUARIO,
           'EMAIL' => $request->EMAIL,
                 
       ]); 
       
          return redirect()-> route('users')->with('agregado','los regristros fue agregados correctamente'); 

        
   }

   public function show($COD_PLANILLA)
   {

    return view('dahs.show',['users'=>users::findOrFaild($ID)]);
     
   }
   public function edit($ID)
   {
    $users = users::findOrFail($ID);
        
      return view('dash.edit', compact('gusuarios'));
   }
   
 
   public function update(Request $request,$ID)
   {
    $users = users::find($ID);
    $users ->ID=$request->input('ID');
    $users ->NAME=$request->input('NAME');
    $users ->NOM_USUARIO=$request->input('NOM_USUARIO');
    $users ->EMAIL=$request->input('EMAIL');
    $users ->save();
       return redirect()-> route('gestionar')->with('editado','los registros fue editado correctamente'); 
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

    public function destroy($ID)
    {
        $users = planillas::findOrFail($ID);
        $deletedPersonName = $users->NAME; // Obtener el nombre de la persona antes de eliminar el registro
        $users->delete();
    
        return redirect()->route('gusuarios')->with(['delete_success' => 'Registro de "' . $deletedPersonName . '" eliminado exitosamente.', 'deleted_person_name' => $deletedPersonName]);
    }
    
}
    



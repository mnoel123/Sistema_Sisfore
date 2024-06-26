<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
############Incluimos Http###########
use Illuminate\Support\Facades\Http;
#####################################
use Illuminate\Http\Request;
use App\Models\personas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class PersonasController extends Controller
{
    public function index()//leer todos los registros
    {
        $rutaApi =('http://localhost:3000/personas/personas');
        $response=Http::get($rutaApi);
        $decode=json_decode($response,true);
        return view('dash.personas')->with('Resulpersonas',$decode);
       

    }

    public function create()//para abrir formularios
    {
        //

        return view('dash.createpersona');


    }

   public function store(Request $request)
    {         

       $personas = Http::post('http://localhost:3000/personas/personas', [

           'COD_PERSONA'=> $request->COD_PERSONA,
           'OPERACION'=> $request->OPERACION,
           'NUM_IDENTIDAD'=> $request->NUM_IDENTIDAD,
           'NOM_PERSONA'=> $request->NOM_PERSONA,
           'APE_PERSONA'=> $request->APE_PERSONA,
           'SEX_PERSONA'=> $request->SEX_PERSONA,
           'FEC_NACIMIENTO'=> $request->FEC_NACIMIENTO,
           'TIP_ESTADO'=> $request->TIP_ESTADO,
           'ESTADO_CIVIL'=> $request->ESTADO_CIVIL,
           'EMAIL'=> $request->EMAIL,
           'COD_TELEFONO'=> $request->COD_TELEFONO,
           'TIP_TELEFONO'=> $request->TIP_TELEFONO,
           'NUM_TELEFONO'=> $request->NUM_TELEFONO,
           'IND_TELEFONO'=> $request->IND_TELEFONO,
           'DES_TELEFONO'=> $request->DES_TELEFONO,
           'COD_DIRECCION'=> $request->COD_DIRECCION,
           'DEPARTAMENTO'=> $request->DEPARTAMENTO,
           'MUNICIPIO'=> $request->MUNICIPIO,
           'COLONIA'=> $request->COLONIA,
           'DES_DIRECCION'=> $request->DES_DIRECCION,
           'COD_AFILIADO'=> $request->COD_AFILIADO,
           'NUM_AFILIADO'=> $request->NUM_AFILIADO,
           'DENOMINACION'=> $request->DENOMINACION,
           'COD_BENEFICIARIO'=> $request->COD_BENEFICIARIO,
           'NOM_COMPLETO_B1'=> $request->NOM_COMPLETO_B1,
           'PORCENTAJE_B1'=> $request->PORCENTAJE_B1,
           'NOM_COMPLETO_B2'=> $request->NOM_COMPLETO_B2,
           'PORCENTAJE_B2'=> $request->PORCENTAJE_B2,
           'NOM_COMPLETO_B3'=> $request->NOM_COMPLETO_B3,
           'PORCENTAJE_B3'=> $request->PORCENTAJE_B3,
           'NOM_COMPLETO_B4'=> $request->NOM_COMPLETO_B4,
           'PORCENTAJE_B4'=> $request->PORCENTAJE_B4,
           'NOM_COMPLETO_B5'=> $request->NOM_COMPLETO_B5,
           'PORCENTAJE_B5'=> $request->PORCENTAJE_B5,
           'COD_USUARIO'=> $request->COD_USUARIO,
           'CONTRASENA'=> $request->CONTRASENA,
           'NOM_USUARIO'=> $request->NOM_USUARIO,
           'TIP_USUARIO'=> $request->TIP_USUARIO,
           'IND_USUARIO'=> $request->IND_USUARIO,
           'PRI_ACCESS'=> $request->PRI_ACCESS,
           'IP_ULT_ACCESS'=> $request->IP_ULT_ACCESS,
           'USR_REGISTRO'=> $request->USR_REGISTRO,
           'FEC_REGISTRO'=> $request->FEC_REGISTRO,
       ]); 
       
       return redirect('personas')->with('success', 'Se guardó correctamente.');
         
        
   }

   public function show($COD_PERSONA)
   {

    return view('dahs.show',['personas'=>personas::findOrFaild($COD_PERSONA)]);
     
   }
   
   public function edit($COD_PERSONA)
   {
      $personas = personas::findOrFail($COD_PERSONA);

      dd($personas);
        
      return view('dash.edit', compact('personas'));
   }
   
   public function update(Request $request, $COD_PERSONA)
   {
       $personas = Http::put('http://localhost:3000/personas/personas/' . $COD_PERSONA, [
           'OPERACION' => $request->OPERACION,
           'COD_PERSONA' => $request->COD_PERSONA,
           'NUM_IDENTIDAD' => $request->NUM_IDENTIDAD,
           'NOM_PERSONA' => $request->NOM_PERSONA,
           'APE_PERSONA' => $request->APE_PERSONA,
           'SEX_PERSONA' => $request->SEX_PERSONA,
           'FEC_NACIMIENTO' => $request->FEC_NACIMIENTO,
           'TIP_ESTADO' => $request->TIP_ESTADO,
           'ESTADO_CIVIL' => $request->ESTADO_CIVIL,
           'EMAIL' => $request->EMAIL,
           'COD_TELEFONO' => $request->COD_TELEFONO,
           'TIP_TELEFONO' => $request->TIP_TELEFONO,
           'NUM_TELEFONO' => $request->NUM_TELEFONO,
           'IND_TELEFONO' => $request->IND_TELEFONO,
           'DES_TELEFONO' => $request->DES_TELEFONO,
           'COD_DIRECCION' => $request->COD_DIRECCION,
           'DEPARTAMENTO' => $request->DEPARTAMENTO,
           'MUNICIPIO' => $request->MUNICIPIO,
           'COLONIA' => $request->COLONIA,
           'DES_DIRECCION' => $request->DES_DIRECCION,
           'COD_AFILIADO' => $request->COD_AFILIADO,
           'NUM_AFILIADO' => $request->NUM_AFILIADO,
           'DENOMINACION' => $request->DENOMINACION,
           'COD_BENEFICIARIO' => $request->COD_BENEFICIARIO,
           'NOM_COMPLETO_B1' => $request->NOM_COMPLETO_B1,
           'PORCENTAJE_B1' => $request->PORCENTAJE_B1,
           'NOM_COMPLETO_B2' => $request->NOM_COMPLETO_B2,
           'PORCENTAJE_B2' => $request->PORCENTAJE_B2,
           'NOM_COMPLETO_B3' => $request->NOM_COMPLETO_B3,
           'PORCENTAJE_B3' => $request->PORCENTAJE_B3,
           'NOM_COMPLETO_B4' => $request->NOM_COMPLETO_B4,
           'PORCENTAJE_B4' => $request->PORCENTAJE_B4,
           'NOM_COMPLETO_B5' => $request->NOM_COMPLETO_B5,
           'PORCENTAJE_B5' => $request->PORCENTAJE_B5,
           'COD_USUARIO' => $request->COD_USUARIO,
           'CONTRASENA' => $request->CONTRASENA,
           'NOM_USUARIO' => $request->NOM_USUARIO,
           'TIP_USUARIO' => $request->TIP_USUARIO,
           'IND_USUARIO' => $request->IND_USUARIO,
           'PRI_ACCESS' => $request->PRI_ACCESS,
           'IP_ULT_ACCESS' => $request->IP_ULT_ACCESS,
           'USR_REGISTRO' => $request->USR_REGISTRO,
           'FEC_REGISTRO' => $request->FEC_REGISTRO,
       ]); 
   
       return redirect()->route('personas')->with('editado', 'Los registros fueron editados correctamente'); 
   }
   
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

   public function destroy($COD_PERSONA)
   {
       $personas=personas::findOrFail($COD_PERSONA);
       $personas->delete();
       //$personas = Http::delete('http://localhost:3000/personas/personas'. $COD_PERSONA);

       return redirect()-> route('personas')->with('eliminado','El registro fue eliminado correctamente'); 
   }

}
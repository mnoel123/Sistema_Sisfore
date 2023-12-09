<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
############Incluimos Http###########
use Illuminate\Support\Facades\Http;
#####################################
use Illuminate\Http\Request;
use App\Models\cuentas;

class CuentasController extends Controller
{
    public function index()//leer todos los registros
    {
        $rutaApi =('http://localhost:3000/estados_financieros/cuentas');
        $response=Http::get($rutaApi);
        $decode=json_decode($response,true);
        return view('dash.cuentas')->with('SEL_CUENTAS',$decode);
    }

    public function create()//para abrir formularios
    {
        return view('dash.cuentas-crear');
    }

   public function store(Request $request)
   {         
       $cuentas = Http::post('http://localhost:3000/estados_financieros/cuentas/ins', [
           'OPERACION'=> $request->OPERACION,
           'COD_CTA_MAYORES' => $request->COD_CTA_MAYORES,
           'TIP_CUENTA' => $request->TIP_CUENTA,
           'NUM_SUBCUENTA' => $request->NUM_SUBCUENTA,
           'NOM_SUBCUENTA'=> $request->NOM_SUBCUENTA,
           'MOVIMIENTO' => $request->MOVIMIENTO,
           'USR_REGISTRO' => $request->USR_REGISTRO,       
       ]); 
       
          return redirect()-> route('cuentas')->with('Agregado','La Cuenta fue agregada correctamente'); 
   }

   public function show($COD_CUENTA)
   {
       //$cuentas = Http::get('http://localhost:3000/cuentas'.$COD_CUENTAS)->json();
       return view('dash.show', ['cuentas'=>cuentas::findOrFail($COD_CUENTA)]);
   }
   
   public function edit($COD_CUENTA)
   {
      $cuentas = cuentas::findOrFail($COD_CUENTA);
        
      return view('dash.cuentas-edit', compact('cuentas'));
   }
   
   public function update(Request $request,$COD_CUENTA)
   {
    $cuenta=cuentas::findOrfail($COD_CUENTA);
    $cuentas = Http::put('http://localhost:3000/estados_financieros/cuentas/act'.$COD_CUENTA, [
        'OPERACION'=> $request->OPERACION,
        'COD_CTA_MAYORES' => $request->COD_CTA_MAYORES,
        'TIP_CUENTA' => $request->TIP_CUENTA,
        'NUM_SUBCUENTA' => $request->NUM_SUBCUENTA,
        'NOM_SUBCUENTA'=> $request->NOM_SUBCUENTA,
        'MOVIMIENTO' => $request->MOVIMIENTO,
        'USR_REGISTRO' => $request->USR_REGISTRO,
    ]); 

       return redirect()-> route('cuentas')->with('editado','La cuenta fue editada correctamente'); 
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

   public function destroy($COD_CUENTA)
   {
       $cuentas= cuentas::findOrFail($COD_CUENTA);
       $cuentas->delete();
       return redirect()-> route('cuentas')->with('eliminado','La cuenta fue eliminado correctamente'); 
   }
}
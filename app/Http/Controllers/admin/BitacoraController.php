<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
############Incluimos Http###########
use Illuminate\Support\Facades\Http;
#####################################
use Illuminate\Http\Request;
use App\Models\bitacora;
class BitacoraController extends Controller
{
    public function index()//leer todos los registros
    {
        $rutaApi =('http://localhost:3000/bitacora/bitacora');
        $response=Http::get($rutaApi);
        $decode=json_decode($response,true);
        return view('dash.bitacora')->with('GetAll_bitacora',$decode);
       

    }



    public function create()//para abrir formularios
    {
        //

        return view('dash.create');


    }

   public function store(Request $request)
   {         

  
        
   }

   public function show()
   {

   
   }
   
   public function edit()
   {
 
   }
   
   public function update(Request $request)
   {  }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

   public function destroy()
   {
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ParametrosController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:3001/parametros');
        $parametros = $response->json();
        return view('Parametros.index', compact('parametros'));
    }

     public function create()
    {
        return view('Parametros.create');
    }


    public function store(Request $request)
    {

    $response = Http::post('http://localhost:3001/parametros', [
        'parametro' => $request->parametro,
        'valor' => $request->valor,

    ]);
    return redirect()->route('Parametros.index');
    }

   public function destroy($id)
    {
        $response = Http::delete("http://localhost:3001/parametros/{$id}");
        return redirect()->route('Parametros.index');
    }

     public function edit($id)
    {
        $response = Http::get("http://localhost:3001/parametros/{$id}");
        $parametros = $response->json();
        return view('Parametros.edit', compact('parametros'));
    }

    public function update(Request $request)
    {
         $response = Http::put("http://localhost:3001/parametros/{$request->id}", [
        'parametro' => $request->parametro,
        'valor' => $request->valor,
    ]);
        return redirect()->route('Parametros.index');
    }

}
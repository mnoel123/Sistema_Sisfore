<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PreguntasController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:3001/preguntas');
        $preguntas = $response->json();
        return view('Preguntas.index', compact('preguntas'));
    }

     public function create()
    {
        return view('Preguntas.create');
    }


    public function store(Request $request)
    {

    $response = Http::post('http://localhost:3001/preguntas', [
        'pregunta' => $request->pregunta,

    ]);
    return redirect()->route('Preguntas.index');
    }

   public function destroy($id)
    {
        $response = Http::delete("http://localhost:3001/preguntas/{$id}");
        return redirect()->route('Preguntas.index');
    }

     public function edit($id)
    {
        $response = Http::get("http://localhost:3001/preguntas/{$id}");
        $preguntas = $response->json();
        return view('Preguntas.edit', compact('preguntas'));
    }

    public function update(Request $request)

    {
         $response = Http::put("http://localhost:3001/preguntas/{$request->id}", [
        'pregunta' => $request->pregunta,
    ]);
        return redirect()->route('Preguntas.index');
    }

}
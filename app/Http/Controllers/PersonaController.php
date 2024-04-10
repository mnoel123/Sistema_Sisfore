<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PersonaController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:3001/personas');
        $personas = $response->json();
        return view('Persona.index', compact('personas'));
    }

    public function create()
    {
        $user_id = Auth::id(); // Obtiene el ID del usuario autenticado
        return view('Persona.create',['user_id' => $user_id]);
    }

    public function store(Request $request)
    {
    $response = Http::post('http://localhost:3001/personas', [
        'num_identidad' => $request->num_identidad,
        'nom_persona' => $request->nom_persona,
        'ape_persona' => $request->ape_persona,
        'sex_persona' => $request->sex_persona,
        'fec_nacimiento' => $request->fec_nacimiento,
        'tip_estado' => $request->tip_estado,
        'estado_civil' => $request->estado_civil,
        'email' => $request->email,
        'usr_registro' => $request->usr_registro,
        'fec_registro' => $request->fec_registro,

    ]);

    return redirect()->route('Persona.index');
    }

    public function destroy($COD_PERSONA)
    {
        $response = Http::delete("http://localhost:3001/personas/{$COD_PERSONA}");
        return redirect()->route('Persona.index');
    }

    public function edit($COD_PERSONA)
    {
        $response = Http::get("http://localhost:3001/personas/{$COD_PERSONA}");
        $persona = $response->json();
        return view('Persona.edit', compact('persona'));
    }

    public function update(Request $request)
    {

         $response = Http::put("http://localhost:3001/personas/{$request->COD_PERSONA}", [

        'num_identidad' => $request->num_identidad,
        'nom_persona' => $request->nom_persona,
        'ape_persona' => $request->ape_persona,
        'sex_persona' => $request->sex_persona,
        'fec_nacimiento' => $request->fec_nacimiento,
        'tip_estado' => $request->tip_estado,
        'estado_civil' => $request->estado_civil,
        'email' => $request->email,
        'usr_registro' => $request->usr_registro,
        'fec_registro' => $request->fec_registro,

    ]);
        return redirect()->route('Persona.index');
    }
}

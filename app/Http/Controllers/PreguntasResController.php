<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PreguntasResController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:3001/preguntas-respuesta');
        $preguntares = $response->json();
        return view('Pregunta-respuesta.index', compact('preguntares'));
    }

}
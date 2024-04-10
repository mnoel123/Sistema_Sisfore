<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:3001/usuario');
        $usuarios = $response->json();
        return view('Usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('Usuarios.create');
    }

    public function store(Request $request)
    {

    $hashedPassword = bcrypt($request->password);
    $response = Http::post('http://localhost:3001/usuario', [
        'user_name' => $request->name,
        'user_estado' => $request->estado,
        'user_email' => $request->email,
        'user_password' => $hashedPassword,
    ]);

    return redirect()->route('Usuarios.index');
    }

    public function destroy($id)
    {
        $response = Http::delete("http://localhost:3001/usuario/{$id}");
        return redirect()->route('Usuarios.index');
    }

    public function edit($id)
    {
        $response = Http::get("http://localhost:3001/usuario/{$id}");
        $usuario = $response->json();
        return view('Usuarios.edit', compact('usuario'));
    }

    public function update(Request $request)
    {
        $hashedPassword = bcrypt($request->password);
         $response = Http::put("http://localhost:3001/usuario/{$request->id}", [

        'user_name' => $request->name,
        'user_estado' => $request->estado,
        'user_email' => $request->email,
        'user_password' => $hashedPassword,
    ]);
        return redirect()->route('Usuarios.index');
    }
}

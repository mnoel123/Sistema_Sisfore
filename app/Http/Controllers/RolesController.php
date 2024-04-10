<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RolesController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:3001/roles');
        $roles = $response->json();
        return view('Roles.index', compact('roles'));
    }

    public function create()
    {

         $responseRoles = Http::get('http://localhost:3001/usuario');
         $roles = $responseRoles->successful() ? $responseRoles->json() : [];

          $responseRol = Http::get('http://localhost:3001/rol');
          $rol = $responseRol->successful() ? $responseRol->json() : [];

        return view('Roles.create', compact('roles','rol'));
    }

    public function store(Request $request)
    {

    $response = Http::post('http://localhost:3001/roles', [
        'role_id' => $request->role_id,
        'model_id' => $request->model_id,

    ]);

    return redirect()->route('Roles.index');
    }

    public function destroy($id)
    {
        $response = Http::delete("http://localhost:3001/roles/{$id}");
        return redirect()->route('Roles.index');
    }

}
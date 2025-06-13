<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;   // o Producto / Cliente según el archivo
use Illuminate\Routing\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = \App\Models\Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'rut' => 'required|unique:usuarios,rut',
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|regex:/@ventasfix\.cl$/|unique:usuarios,email',
            'password' => 'required|min:6',
        ]);

        // Crear usuario
        \App\Models\Usuario::create([
            'rut' => $request->rut,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirigir al listado
        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'rut' => 'required|string',
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }

}

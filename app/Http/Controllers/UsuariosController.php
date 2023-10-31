<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function registro()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $usuarios = new Usuarios();

        $usuarios->nombre = $request->post('nombre');
        $usuarios->apellido = $request->post('apellido');
        $usuarios->usuario = $request->post('usuario');
        $usuarios->password = Hash::make($request->post('password'));
        $usuarios->save();

        return redirect()->route('usuarios.index')->with('success', 'Datos registrados exitosamente!');
    }

    public function validarUsuario()
    {
        return to_route('tareas.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Tareas;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Tareas::orderBy('tituloTarea', 'asc')->paginate(10);
        return view('tareasindex', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('creartarea');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tareas = new Tareas();

        $tareas->tituloTarea      = $request->post('tituloTarea');
        $tareas->descripcionTarea = $request->post('descripcionTarea');
        $tareas->tipoTarea        = $request->post('tipoTarea');
        $tareas->estadoTarea      = $request->post('estadoTarea');
        $tareas->save();

        return redirect()->route('tareas.index')->with('success', 'Datos registrados exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $id = decrypt($id);

        $tareas = Tareas::find($id);
        return view('eliminartarea', compact('tareas'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id = decrypt($id);

        $tareas = Tareas::find($id);

        return view('actualizartarea', compact('tareas'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tareas = Tareas::find($id);

        $tareas->tituloTarea = $request->post('tituloTarea');
        $tareas->descripcionTarea = $request->post('descripcionTarea');
        $tareas->tipoTarea = $request->post('tipoTarea');
        $tareas->estadoTarea = $request->post('estadoTarea');
        $tareas->save();

        return redirect()->route('tareas.index')->with('success', 'Datos actualizados correctamente!');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tareas = Tareas::find($id);
        $tareas->delete();

        return redirect()->route('tareas.index')->with('success', 'Datos eliminados correctamente!');
        //
    }
}

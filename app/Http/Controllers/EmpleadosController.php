<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleados::all();
        return view('empleados.list', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombres' => ['required'],
            'apellidos' => ['required'],
            'fechanac' => ['required'],
            'sexo' => ['required'],
            'puesto' => ['required']
        ]);

        Empleados::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'fechanac' => $request->fechanac,
            'sexo' => $request->sexo,
            'puesto' => $request->puesto
        ]);

        return redirect()
            ->route('empleados.index')
            ->with(['success' => 'La informacion del empleado ha sido almacenada']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado = Empleados::FindOrFail($id);
        return view('empleados.delete', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $empleado = Empleados::FindOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nombres' => ['required'],
            'apellidos' => ['required'],
            'fechanac' => ['required'],
            'sexo' => ['required'],
            'puesto' => ['required']
        ]);

        $empleados = Empleados::findOrfail($id);
        $empleados->nombres = $request->nombres;
        $empleados->apellidos = $request->apellidos;
        $empleados->fechanac = $request->fechanac;
        $empleados->sexo = $request->sexo;
        $empleados->puesto = $request->puesto;

        $empleados->save();

        return redirect()
            ->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleados = Empleados::findOrFail($id);
        $empleados->delete();
        return redirect()
            ->route('empleados.index');
    }
}

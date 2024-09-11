<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Productos::all();
        return view('productos.list', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'descripcion' => ['required'],
            'fechaelab' => ['required'],
            'fechavence' => ['required'],
            'proveedor' => ['required'],
            
        ]);

        Productos::create([
            'descripcion' => $request->descripcion,
            'fechaelabb' => $request->fechaelab,
            'fechavence' => $request->fechavence,
            'proveedor' => $request->proveedor,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()
            ->route('productos.index')
            ->with(['success' => 'La informacion del producto ha sido almacenada']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Productos::FindOrFail($id);
        return view('productos.delete', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Productos::FindOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'descripcion' => ['required'],
            'fechaelab' => ['required'],
            'fechavence' => ['required'],
            'proveedor' => ['required'],
        ]);

        $productos = Productos::findOrfail($id);
        $productos->descripcion = $request->descripcion;
        $productos->fechaelab = $request->fechaelab;
        $productos->fechavence = $request->fechavence;
        $productos->proveedor = $request->proveedor;

        $productos->save();

        return redirect()
            ->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productos = Productos::findOrFail($id);
        $productos->delete();
        return redirect()
            ->route('productos.index');
    }
}

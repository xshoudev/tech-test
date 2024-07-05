<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos', [ 'productos' => $productos ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'nombre' => 'required|max:100',
           'description' => 'required', 
           'precio' => 'required|numeric',
           'cantidad' => 'required|integer'
        ]);


        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->description = $request->input('description');
        $producto->precio = $request->input('precio');
        $producto->cantidad = $request->input('cantidad');
        $producto->save();

        return redirect('productos');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('editar', ['producto' => $producto]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer',
        ]);
    
        $producto = Producto::find($id);
        $producto->update($request->all());
    
        return redirect('/productos');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto = Producto::find($producto);
        $producto->each->delete();

        return redirect('productos');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Routing\Controller;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
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
            $request->validate([
                'sku' => 'required|string|unique:productos,sku',
                'nombre' => 'required',
                'precio_neto' => 'required|integer',
                'precio_venta' => 'required|integer',
                'stock_actual' => 'required|integer',
            ]);

                Producto::create([
                'sku' => $request->sku,
                'nombre' => $request->nombre,
                'descripcion_corta' => $request->descripcion_corta ?? '',
                'descripcion_larga' => $request->descripcion_larga ?? '',
                'imagen' => $request->imagen ?? '',
                'precio_neto' => $request->precio_neto,
                'precio_venta' => $request->precio_venta,
                'stock_actual' => $request->stock_actual,
                'stock_minimo' => 0, // Si no usas estos campos aún, pon 0 o valores por defecto
                'stock_bajo' => 0,
                'stock_alto' => 0,
            ]);



            return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente');
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
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'sku' => 'required|string|unique:productos,sku,' . $producto->id,
            'nombre' => 'required',
            'precio_neto' => 'required|integer',
            'precio_venta' => 'required|integer',
            'stock_actual' => 'required|integer',
        ]);

        $producto->update([
            'sku' => $request->sku,
            'nombre' => $request->nombre,
            'descripcion_corta' => $request->descripcion_corta ?? '',
            'descripcion_larga' => $request->descripcion_larga ?? '',
            'imagen' => $request->imagen ?? '',
            'precio_neto' => $request->precio_neto,
            'precio_venta' => $request->precio_venta,
            'stock_actual' => $request->stock_actual,
            'stock_minimo' => $producto->stock_minimo,
            'stock_bajo' => $producto->stock_bajo,
            'stock_alto' => $producto->stock_alto,
        ]);

    return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente');
    }

}

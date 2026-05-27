<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function mostrarColecciones()
    {
        $categorias = Categoria::all();
        
        return view('coleccion', compact('categorias'));
    }

    public function mostrarCategoria($categoria)
    { 
        // Buscamos la categoría por su slug (ej: "bases"). Si no existe, tira error 404.
        $cat = \App\Models\Categoria::where('slug', $categoria)->firstOrFail();

        // Por la relación que armamos en el Modelo, podemos traer sus productos:
        $productos = $cat->productos;

        // Le mandamos a la vista los productos y el nombre real de la categoría
        return view('catalogo.categorias', [
        'productos' => $productos,
        'categoria' => $cat->nombre // Pasamos el nombre lindo (ej: "Bases")
        ]);
    }

    public function mostrarTodos(){
    
    // Traemos TODOS los productos de SQLite (Laravel ignora solitos los SoftDeletes)
    $productos = Producto::all();

    // Mandamos los datos a una nueva vista
    return view('catalogo.todos', compact('productos'));
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }

}

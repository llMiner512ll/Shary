<?php

namespace App\Http\Controllers;
use App\Models\Dimensiones;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Peso;
use App\Models\Producto;
use App\Models\Color;
use App\Models\Tipo;
use http\Env\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::get();
    // return view(dirección,variable POST, variable GET de DB)
        return view('productos', ['productos' => $productos]);
    }
    public function nuevo()
    {
        $productos = Producto::get();
        $colores = Color::get();
        $tipos = Tipo::get();
        $modelos = Modelo::get();
        $marcas = Marca::get();
        $dimensiones = Dimensiones::get();
        $pesos = Peso::get();-
        return view('nuevoproducto', ['productos' => $productos, 'colores' => $colores, 'tipos' => $tipos, 'modelos' => $modelos, 'marcas' => $marcas, 'dimensiones' => $dimensiones, 'pesos' => $pesos]);
    }
    public function show($producto)
    {
        return view('detallesproducto', ['producto' => $producto]);
    }
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->save();
        return redirect()->route('productos');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductosController extends Controller
{
    public function index(){

        $productos = Producto::all();
        

        return view('productos.index', compact('productos'));
    }

    public function create(){
        return view('productos.create');
    }

    public function store(Request $request){
        $producto = new Producto();

        $producto->identificador = $request->identificador;
        $producto->nombre = $request->nombre;
        $producto->impuesto = $request->impuesto;
        
        $producto->save();

        return redirect()->route('productos.index');
    }

    public function edit($id){

        $producto = Producto::find($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id){

        $producto = Producto::find($id);

        $producto->update($request->all());
        
        return redirect()->route('productos.index');
    }

    public function destroy($id){
        $producto = Producto::find($id);

        $producto->delete();

        return redirect()->route('productos.index');
    }
}

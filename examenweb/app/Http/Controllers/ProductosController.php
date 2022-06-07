<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductosController extends Controller
{
    //Retorna la vista y los datos que encuentra en la base de datos de la tabla Productos
    public function index(){

        $productos = Producto::all();
        

        return view('productos.index', compact('productos'));
    }
    //Retorna la vista
    public function create(){
        return view('productos.create');
    }
    //Agrega datos a la bd
    public function store(Request $request){
        $producto = new Producto();

        $producto->identificador = $request->identificador;
        $producto->nombre = $request->nombre;
        $producto->impuesto = $request->impuesto;
        
        $producto->save();

        return redirect()->route('productos.index');
    }
    //Edita el cliente especifico
    public function edit($id){

        $producto = Producto::find($id);
        return view('productos.edit', compact('producto'));
    }
    //Actualiza los datos de un cliente
    public function update(Request $request, $id){

        $producto = Producto::find($id);

        $producto->update($request->all());
        
        return redirect()->route('productos.index');
    }
    //Elimina un cliente de la base de datos
    public function destroy($id){
        $producto = Producto::find($id);

        $producto->delete();

        return redirect()->route('productos.index');
    }
}

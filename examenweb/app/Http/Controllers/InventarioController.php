<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
class InventarioController extends Controller
{
    //Retorna la vista y los datos que encuentra en la base de datos de la tabla inventario
    public function index(){
    $inventarios = Inventario::all();
        

    return view('inventarios.index', compact('inventarios'));
    }
    //Retorna la vista
    public function create(){
        return view('inventarios.create');
    }

    //Agrega datos a la bd
    public function store(Request $request){
        $inventario = new Inventario();

        $inventario->identificador = $request->identificador;
        $inventario->producto = $request->producto;
        $inventario->cantidad = $request->cantidad;
        $inventario->cantidadminima = $request->cantidadminima;
        $inventario->cantidadmaxima = $request->cantidadmaxima;
        $inventario->gravado = $request->gravado;

        $inventario->save();

        return redirect()->route('inventarios.index');
    }

    //Edita el cliente especifico
    public function edit($id){

        $inventario = Inventario::find($id);
        return view('inventarios.edit', compact('inventario'));
    }

    //Actualiza los datos de un cliente
    public function update(Request $request, $id){

        $inventario = Inventario::find($id);

        $inventario->update($request->all());
        
        return redirect()->route('inventarios.index');
    }

    //Elimina un cliente de la base de datos
    public function destroy($id){
        $inventario = Inventario::find($id);

        $inventario->delete();

        return redirect()->route('inventarios.index');
    }
}

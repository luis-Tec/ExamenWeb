<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
class InventarioController extends Controller
{
    public function index(){
    $inventarios = Inventario::all();
        

    return view('inventarios.index', compact('inventarios'));
    }

    public function create(){
        return view('inventarios.create');
    }

    public function store(Request $request){
        $inventario = new Inventario();

        $inventario->identificador = $request->identificador;
        $inventario->producto = $request->producto;
        $inventario->cantidad = $request->cantidad;
        $inventario->cantidadminima = $request->cantidadminima;
        $inventario->cantidadmaxima = $request->cantidadmaxima;
        $inventario->gravado = $request->gravado;

        $inventarios->save();

        return redirect()->route('inventarios.index');
    }

    public function edit($id){

        $inventario = Inventario::find($id);
        return view('inventarios.edit', compact('inventario'));
    }

    public function update(Request $request, $id){

        $inventario = Inventario::find($id);

        $inventario->update($request->all());
        
        return redirect()->route('inventarios.index');
    }

    public function destroy($id){
        $inventario = Inventario::find($id);

        $inventario->delete();

        return redirect()->route('inventarios.index');
    }
}

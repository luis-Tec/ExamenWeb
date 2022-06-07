<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipopago;
class TipoPagosController extends Controller
{
     //Retorna la vista y los datos que encuentra en la base de datos de la tabla TipoPagos
    public function index(){

        $tipopagos = TipoPago::all();
        

        return view('tipopagos.index', compact('tipopagos'));
    }

    //Retorna la vista
    public function create(){
        return view('tipopagos.create');
    }

    //Agrega datos a la bd
    public function store(Request $request){
        $tipopago = new TipoPago();

        $tipopago->identificador = $request->identificador;
        $tipopago->nombre = $request->nombre;
        $tipopago->valor = $request->valor;
        
        $tipopago->save();

        return redirect()->route('tipopagos.index');
    }

    //Edita el cliente especifico
    public function edit($id){

        $tipopago = TipoPago::find($id);
        return view('tipopagos.edit', compact('tipopago'));
    }

    //Actualiza los datos de un cliente
    public function update(Request $request, $id){

        $tipopago = TipoPago::find($id);

        $tipopago->update($request->all());
        
        return redirect()->route('tipopagos.index');
    }

    //Elimina un cliente de la base de datos
    public function destroy($id){
        $tipopago = TipoPago::find($id);

        $tipopago->delete();

        return redirect()->route('tipopagos.index');
    }
}

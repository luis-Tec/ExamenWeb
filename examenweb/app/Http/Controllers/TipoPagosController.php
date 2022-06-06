<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipopago;
class TipoPagosController extends Controller
{
    public function index(){

        $tipopagos = TipoPago::all();
        

        return view('tipopagos.index', compact('tipopagos'));
    }

    public function create(){
        return view('tipopagos.create');
    }

    public function store(Request $request){
        $tipopago = new TipoPago();

        $tipopago->identificador = $request->identificador;
        $tipopago->nombre = $request->nombre;
        $tipopago->valor = $request->valor;
        
        $tipopago->save();

        return redirect()->route('tipopagos.index');
    }

    public function edit($id){

        $tipopago = TipoPago::find($id);
        return view('tipopagos.edit', compact('tipopago'));
    }

    public function update(Request $request, $id){

        $tipopago = TipoPago::find($id);

        $tipopago->update($request->all());
        
        return redirect()->route('tipopagos.index');
    }

    public function destroy($id){
        $tipopago = TipoPago::find($id);

        $tipopago->delete();

        return redirect()->route('tipopagos.index');
    }
}

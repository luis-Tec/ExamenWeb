<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientsController extends Controller
{
    
    //Retorna la vista y los datos que encuentra en la base de datos de la tabla cliente
    public function index(){

        $clients = Client::all();
        

        return view('clients.index', compact('clients'));
    }

    //Retorna la vista
    public function create(){
        return view('clients.create');
    }

    //Agrega datos a la bd
    public function store(Request $request){
        $client = new Client();

        $client->cedula = $request->cedula;
        $client->nombre = $request->nombre;

        $client->save();

        return redirect()->route('clients.index');
    }

    //Edita el cliente especifico
    public function edit($id){

        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    //Actualiza los datos de un cliente
    public function update(Request $request, $id){

        $client = Client::find($id);

        $client->update($request->all());
        
        return redirect()->route('clients.index');
    }

    //Elimina un cliente de la base de datos
    public function destroy($id){
        $client = Client::find($id);

        $client->delete();

        return redirect()->route('clients.index');
    }

}

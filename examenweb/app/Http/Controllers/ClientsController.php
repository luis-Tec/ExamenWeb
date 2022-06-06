<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientsController extends Controller
{
    
    public function index(){

        $clients = Client::all();
        

        return view('clients.index', compact('clients'));
    }

    public function create(){
        return view('clients.create');
    }

    public function store(Request $request){
        $client = new Client();

        $client->cedula = $request->cedula;
        $client->nombre = $request->nombre;

        $client->save();

        return redirect()->route('clients.index');
    }

    public function edit($id){

        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id){

        $client = Client::find($id);

        $client->update($request->all());
        
        return redirect()->route('clients.index');
    }

    public function destroy($id){
        $client = Client::find($id);

        $client->delete();

        return redirect()->route('clients.index');
    }

}

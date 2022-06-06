@extends('layouts.clients')


@section('title','Create')
@section('content')

<form action="{{ route('clients.store') }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-1g">
    @csrf
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Crear cliente</h2>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Cedula" name="cedula">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Nombre" name="nombre">
    
    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600 ">Crear</button>

</form>
@endsection
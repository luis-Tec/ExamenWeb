@extends('layouts.productos')

@section('title','Edit')
@section('content')

<form action="{{ route('productos.update', $producto->id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-1g">
    @csrf
    @method('put')
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Editar producto</h2>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Identificador" name="indentificador" value="{{ $producto->identificador }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Nombre" name="nombre" value="{{ $producto->nombre }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Impuesto" name="impuesto" value="{{ $producto->impuesto }}">
    
    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600 ">Actualizar</button>

</form>
@endsection
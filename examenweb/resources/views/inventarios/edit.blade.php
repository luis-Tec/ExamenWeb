@extends('layouts.inventarios')

@section('title','Edit')
@section('content')

<form action="{{ route('inventarios.update', $inventario->id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-1g">
    @csrf
    @method('put')
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Editar inventario</h2>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Identificador" name="identificador" value="{{ $inventario->identificador }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Producto" name="producto" value="{{ $inventario->producto }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Cantidad" name="cantidad" value="{{ $inventario->cantidad }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Cantidadminima" name="cantidadminima" value="{{ $inventario->cantidadminima }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Cantidadmaxima" name="cantidadmaxima" value="{{ $inventario->cantidadmaxima }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Gravado" name="gravado" value="{{ $inventario->gravado }}">
    
    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600 ">Actualizar</button>

</form>
@endsection
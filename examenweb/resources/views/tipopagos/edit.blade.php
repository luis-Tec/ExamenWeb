@extends('layouts.tipopagos')

@section('title','Edit')
@section('content')

<form action="{{ route('tipopagos.update', $tipopago->id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-1g">
    @csrf
    @method('put')
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Editar Tipo de pago</h2>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Identificador" name="indentificador" value="{{ $tipopago->identificador }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Nombre" name="nombre" value="{{ $tipopago->nombre }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" 
    placeholder="Valor" name="valor" value="{{ $tipopago->valor }}">
    
    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600 ">Actualizar</button>

</form>
@endsection
@extends('layouts.inventarios')

@section('title','Home')
@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-indigo-500 text-white">
          <th class="w-20 py-4 ...">Identificador</th>
          <th class="w-1/8 py-4 ...">Producto</th>
          <th class="w-1/16 py-4 ...">Cantidad</th>
          <th class="w-1/24 py-4 ...">Cantidad minima</th>
          <th class="w-1/32 py-4 ...">Cantidad maxima</th>
          <th class="w-1/40 py-4 ...">Gravado o Excepto</th>
          <th class="w-1/48 py-4 ...">Opciones</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($inventarios as $row)
        <tr>
          <td class="py-3 px-6">{{$row->identificador}}</td>
          <td class="p-3 text-center">{{$row->producto}}</td>
          <td class="py-3 px-6">{{$row->cantidad}}</td>
          <td class="p-3 text-center">{{$row->cantidadminima}}</td>
          <td class="py-3 px-6">{{$row->cantidadmaxima}}</td>
          <td class="p-3 text-center">{{$row->gravado}}</td>
          <td class="p-3 flex justify-center">
            <form action="{{ route('inventarios.destroy', $row->id) }}" method="POST">
              @csrf
              @method('delete')
              <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
              <i class="fas fa-trash"></i></button>
            </form>
            <a href="{{ route('inventarios.edit', $row->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
            <i class="fas fa-pen"></i></button>
          
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
</div>

@endsection

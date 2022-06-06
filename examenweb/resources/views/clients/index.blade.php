@extends('layouts.clients')

@section('title','Home')
@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-indigo-500 text-white">
          <th class="w-20 py-4 ...">Cedula</th>
          <th class="w-1/8 py-4 ...">Nombre</th>
          <th class="w-1/16 py-4 ...">Opciones</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($clients as $row)
        <tr>
          <td class="py-3 px-6">{{$row->cedula}}</td>
          <td class="p-3 text-center">{{$row->nombre}}</td>
          <td class="p-3 flex justify-center">
            
            <form action="{{ route('clients.destroy', $row->id) }}" method="POST">
              @csrf
              @method('delete')
              <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
              <i class="fas fa-trash"></i></button>
            </form>
            <a href="{{ route('clients.edit', $row->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
            <i class="fas fa-pen"></i></button>
          
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
</div>

@endsection

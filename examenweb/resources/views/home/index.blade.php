@extends('layouts.home')

@section('title','Home')
@section('content')

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h1 style="font-size:60px" >Home</h1>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Clientes</div>
                            </div>

                            <div class="ml-12">
                                <div class="flex items-center">
                                    <a href="{{route('clients.index')}}" class="border border-blue-500 rounded m-4 px-20 pt-1 h-10 bg-white text-black-500 font-semibold mx-2">Acceder</a>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Productos</div>
                            </div>

                            <div class="ml-12">
                                <div class="flex items-center">
                                    <a href="{{route('productos.index')}}" class="border border-blue-500 rounded m-4 px-20 pt-1 h-10 bg-white text-black-500 font-semibold mx-2">Acceder</a>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Inventario</div>
                            </div>

                            <div class="ml-12">
                                <div class="flex items-center">
                                    <a href="{{route('inventarios.index')}}" class="border border-blue-500 rounded m-4 px-20 pt-1 h-10 bg-white text-black-500 font-semibold mx-2">Acceder</a>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center"></div>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Tipos de pagos</div>
                                <div class="ml-12">
                                    <div class="flex items-center">
                                        <a href="{{route('tipopagos.index')}}" class="border border-blue-500 rounded m-4 px-20 pt-1 h-10 bg-white text-black-500 font-semibold mx-2">Acceder</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
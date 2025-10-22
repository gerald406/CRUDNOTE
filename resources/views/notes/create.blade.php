@extends('layouts.app')


@section('content')
    <h3 class="text-2xl font-bold mb-6 text-center">Crear Nueva Nota</h3>

    <form action="{{ route('notes.store') }}" method="post" class="bg-white shadow-md rounded-lg p-6 w-full md:w-2/3 mx-auto">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold mb-2">Título</label>
            <input type="text" name="title" id="title" placeholder="Ejemplo: Plan de la Semana" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold mb-2">Descripción</label>
            <textarea name="description" id="description" rows="5" placeholder="Escribe aquí el contenido de tu nota..." class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500"></textarea>
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('notes.index') }}" class="text-gray-600 hover:underline">Cancelar</a>

            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
            Guardar Nota
            </button>

        </div>

    </form>
@endsection

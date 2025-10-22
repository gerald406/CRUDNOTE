@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold mb-4">Editar Nota</h2>

    <form action="{{ route('notes.update', $note) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Título:</label>
            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" value="{{ old('title', $note->title) }}">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Descripción:</label>
            <textarea name="description" id="description" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">{{ old('description', $note->description) }}</textarea>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                Actualizar Nota
            </button>
            <a href="{{ route('notes.index') }}" class="inline-block font-bold text-sm text-blue-500 hover:text-blue-800">
                Cancelar
            </a>
        </div>
    </form>
@endsection
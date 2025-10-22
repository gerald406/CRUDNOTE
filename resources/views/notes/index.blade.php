@extends('layouts.app')

@section('content')
    <div class="mb-4 text-center">
        <a href="{{ route('notes.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Crear Nueva Nota
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4">Mis Notas</h2>

        @forelse ($notes as $note)
            <div class="border-b border-gray-200 py-3">
                <h3 class="text-lg font-bold">{{ $note->title; }}</h3>
                <p class="text-gray-600">{{ $note->description  }}</p>
                <div class="mt-2">
                    <a href="{{ route('notes.show', $note ) }}" class="text-blue-500 hover:underline">Ver</a> |
                    <a href="{{ route('notes.edit', $note ) }}" class="text-yellow-500 hover:underline">Editar</a> |
                    <button class="text-red-500 hover:underline">Eliminar</button>
                </div>
            </div>
        @empty
            <p>NO hay notas registrada</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $notes->links() }}
    </div>
@endsection
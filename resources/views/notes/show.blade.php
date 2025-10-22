@extends('layouts.app')


@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-3xl font-bold mb-4">{{ $note->title }}</h2>
        <p class="text-gray-700 mb-4">{{ $note->description }}</p>
        <div class="text-sm text-gray-500">
            <p>Fecha límite: {{ $note->deadline ? \Carbon\Carbon::parse($note->deadline)->format('d/m/Y') : 'No definida' }}</p>
            <p>Estado: <span class="font-bold {{ $note->done ? 'text-green-500' : 'text-red-500' }}">{{ $note->done ? 'Terminada' : 'Pendiente' }}</span></p>
        </div>
        <div class="mt-6">
            <a href="{{ route('notes.index') }}" class="text-blue-500 hover:underline">Volver a la lista</a>
        </div>
    </div>
@endsection
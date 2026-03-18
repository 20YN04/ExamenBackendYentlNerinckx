@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Nieuwe cursus toevoegen</h1>

    <form action="{{ route('courses.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1">Titel</label>
            <input type="text" name="title" value="{{ old('title') }}" class="w-full border p-2 rounded">
            @error('title') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1">Beschrijving</label>
            <textarea name="description" rows="4" class="w-full border p-2 rounded">{{ old('description') }}</textarea>
            @error('description') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label>
                <input type="checkbox" name="active" value="1" {{ old('active') ? 'checked' : '' }}>
                Actief
            </label>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
    </form>
@endsection
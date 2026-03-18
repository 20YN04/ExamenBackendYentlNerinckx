@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Cursussen</h1>

    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 border">Titel</th>
                <th class="p-2 border">Beschrijving</th>
                <th class="p-2 border">Status</th>
                <th class="p-2 border">Actie</th>
            </tr>
        </thead>
        <tbody>
            @forelse($allCourses as $course)
                <tr>
                    <td class="p-2 border">{{ $course->title }}</td>
                    <td class="p-2 border">{{ $course->description }}</td>
                    <td class="p-2 border">
                        @if($course->active)
                            <span class="text-green-600">Actief</span>
                        @else
                            <span class="text-red-600">Inactief</span>
                        @endif
                    </td>
                    <td class="p-2 border">
                        <form action="{{ route('courses.toggle', $course) }}" method="POST">
                            @csrf
                            <button type="submit" class="px-3 py-1 text-white rounded {{ $course->active ? 'bg-orange-400' : 'bg-green-500' }}">
                                {{ $course->active ? 'Deactiveer' : 'Activeer' }}
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="p-2 text-gray-500">Geen cursussen gevonden.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
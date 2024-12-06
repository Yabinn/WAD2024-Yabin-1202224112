@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-6">Lecturer List</h2>
        
        <div class="mb-4">
            <a href="{{ route('lecturers.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Add New Lecturer</a>
        </div>
        
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-3 px-6 text-left text-gray-600">Lecturer Code</th>
                    <th class="py-3 px-6 text-left text-gray-600">Name</th>
                    <th class="py-3 px-6 text-left text-gray-600">NIP</th>
                    <th class="py-3 px-6 text-left text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lecturers as $lecturer)
                    <tr>
                        <td class="py-3 px-6 text-gray-600">{{ $lecturer->lecturer_code }}</td>
                        <td class="py-3 px-6 text-gray-600">{{ $lecturer->lecturer_name }}</td>
                        <td class="py-3 px-6 text-gray-600">{{ $lecturer->nip }}</td>
                        <td class="py-3 px-6 text-gray-600">
                            <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            |
                            <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

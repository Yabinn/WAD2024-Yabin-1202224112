@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-6">Add New Lecturer</h2>
        
        <form action="{{ route('lecturers.store') }}" method="POST" class="bg-white p-6 rounded shadow-lg">
            @csrf
            <div class="mb-4">
                <label for="lecturer_code" class="block text-sm font-medium text-gray-600">Lecturer Code</label>
                <input type="text" name="lecturer_code" id="lecturer_code" class="mt-2 p-2 w-full border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="lecturer_name" class="block text-sm font-medium text-gray-600">Lecturer Name</label>
                <input type="text" name="lecturer_name" id="lecturer_name" class="mt-2 p-2 w-full border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="nip" class="block text-sm font-medium text-gray-600">NIP</label>
                <input type="text" name="nip" id="nip" class="mt-2 p-2 w-full border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" name="email" id="email" class="mt-2 p-2 w-full border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="telephone_number" class="block text-sm font-medium text-gray-600">Telephone Number</label>
                <input type="text" name="telephone_number" id="telephone_number" class="mt-2 p-2 w-full border rounded-lg">
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save Lecturer</button>
        </form>
    </div>
@endsection

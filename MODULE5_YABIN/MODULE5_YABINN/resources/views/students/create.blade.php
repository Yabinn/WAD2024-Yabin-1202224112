@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-6">Add New Student</h2>
        
        <form action="{{ route('students.store') }}" method="POST" class="bg-white p-6 rounded shadow-lg">
            @csrf
            <div class="mb-4">
                <label for="nim" class="block text-sm font-medium text-gray-600">NIM</label>
                <input type="text" name="nim" id="nim" class="mt-2 p-2 w-full border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="student_name" class="block text-sm font-medium text-gray-600">Student Name</label>
                <input type="text" name="student_name" id="student_name" class="mt-2 p-2 w-full border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" name="email" id="email" class="mt-2 p-2 w-full border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="major" class="block text-sm font-medium text-gray-600">Major</label>
                <input type="text" name="major" id="major" class="mt-2 p-2 w-full border rounded-lg" required>
            </div>

            <

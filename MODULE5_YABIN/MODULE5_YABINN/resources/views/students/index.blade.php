@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-6">Student List</h2>
        
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-3 px-6 text-left text-gray-600">Student NIM</th>
                    <th class="py-3 px-6 text-left text-gray-600">Student Name</th>
                    <th class="py-3 px-6 text-left text-gray-600">Email</th>
                    <th class="py-3 px-6 text-left text-gray-600">Major</th>
                    <th class="py-3 px-6 text-left text-gray-600">Lecturer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $student->nim }}</td>
                        <td class="py-3 px-6">{{ $student->student_name }}</td>
                        <td class="py-3 px-6">{{ $student->email }}</td>
                        <td class="py-3 px-6">{{ $student->major }}</td>
                        <td class="py-3 px-6">
                            @if ($student->lecturer)
                                {{ $student->lecturer->lecturer_name }}
                            @else
                                No Lecturer Assigned
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

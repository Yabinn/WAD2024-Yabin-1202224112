<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Lecturer and Student Management</h1>
            <nav>
                <a href="{{ route('lecturers.index') }}" class="px-4 py-2 hover:bg-blue-700">Lecturers</a>
                <a href="{{ route('students.index') }}" class="px-4 py-2 hover:bg-blue-700">Students</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto my-8">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Lecturer and Student Management</p>
        </div>
    </footer>

</body>
</html>

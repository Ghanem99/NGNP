<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to NGNP</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Heroicons -->
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@latest/dist/index.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="container mx-auto px-4 py-2 bg-gray-100 flex justify-end">
        @auth
            <a href="{{ url('/dashboard') }}" class="flex items-center text-gray-800 hover:text-gray-700">
                <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9 9a1 1 0 112 0v4a1 1 0 11-2 0V9zm1-6a1 1 0 00-1 1v4a1 1 0 102 0V4a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="flex items-center text-gray-800 hover:text-gray-700">
                <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M16 10a6 6 0 11-12 0 6 6 0 0112 0zM5 10a1 1 0 112 0 1 1 0 01-2 0z" clip-rule="evenodd" />
                </svg>
                Log in
            </a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="flex items-center ml-4 text-gray-800 hover:text-gray-700">
                    <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M16 10a6 6 0 11-12 0 6 6 0 0112 0zM5 10a1 1 0 112 0 1 1 0 01-2 0z" clip-rule="evenodd" />
                    </svg>
                    Register
                </a>
            @endif
        @endauth
    </nav>
    <div class="container mx-auto py-12">
        <div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="px-6 py-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-4"># NGNP</h1>
                <p class="text-gray-600">
                    This project aims to provide a straightforward web application to motivate users to engage in home fitness routines. It offers the following features:
                </p>
                <ul class="list-disc mt-4 ml-6">
                    <li class="text-gray-600"><span class="font-semibold">Exercise Logging:</span> Users can add exercises and track their progress over time.</li>
                    <li class="text-gray-600"><span class="font-semibold">Comprehensive Analysis:</span> Users can access an overview of their fitness journey.</li>
                </ul>
                <p class="text-gray-600 mt-4">
                    By serving as a tracking tool, the project aims to inspire consistency in users' efforts towards achieving their fitness objectives, all within the convenience of their home environment.
                </p>
            </div>
        </div>
    </div>

</body>
</html>

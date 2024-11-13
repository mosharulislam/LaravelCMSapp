<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 dark:from-gray-800 dark:via-gray-700 dark:to-gray-600 shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('contacts.index') }}" class="text-xl font-bold text-white">Contact Management System</a>
            <div>
                @auth
                    <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="bg-white hover:bg-gray-200 text-black font-bold py-2 px-4 rounded">
                        Logout
                    </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="container mx-auto py-8 px-4 sm:px-6 lg:px-8">
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-800 px-4 py-3 rounded mb-6 dark:bg-green-800 dark:text-green-100" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        @yield('content')
    </main>
</body>
</html>

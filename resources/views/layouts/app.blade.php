<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Portfolio')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom scroll behavior for smooth transition */
        html { scroll-behavior: smooth; }
        /* Simple hover effect for links */
        .nav-link:hover { transform: translateY(-2px); transition: transform 0.2s; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <nav class="bg-white sticky top-0 z-50 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ url('/') }}" class="text-2xl font-extrabold text-blue-600 tracking-wider">
                    Sajid <span class="text-gray-900">Dev</span>
                </a>
                <div class="flex space-x-4">
                    <a href="{{ route('home') }}" class="nav-link text-gray-600 hover:text-blue-600 font-medium px-3 py-2">হোম</a>
                    <a href="{{ route('about') }}" class="nav-link text-gray-600 hover:text-blue-600 font-medium px-3 py-2">আমার সম্পর্কে</a>
                    <a href="{{ route('projects') }}" class="nav-link text-gray-600 hover:text-blue-600 font-medium px-3 py-2">প্রজেক্টস</a>
                    <a href="{{ route('contact') }}" class="nav-link text-gray-600 hover:text-blue-600 font-medium px-3 py-2">যোগাযোগ</a>
                </div>
            </div>
        </div>
    </nav>
    
    <main class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white mt-16 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-lg font-semibold mb-2">MD SAJID RAHMAN</p>
            <p class="text-sm text-gray-400">&copy; {{ date('Y') }} All rights reserved. Built with Laravel & Tailwind CSS.</p>
            <div class="mt-4 space-x-4">
                <a href="https://github.com/MdSajidRahman23" target="_blank" class="text-gray-400 hover:text-blue-400 transition duration-150">GitHub</a>
                <a href="#" class="text-gray-400 hover:text-blue-400 transition duration-150">LinkedIn</a>
            </div>
        </div>
    </footer>
</body>
</html>
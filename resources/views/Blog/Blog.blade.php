<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    {{-- Navbar --}}
    <header class="navbar-container w-auto flex justify-center p-2 bg-gradient-to-r  from-blue-600 via-blue-700 to-blue-500 text-white">
        <x-Navbar />
    </header>
</body>
</html>
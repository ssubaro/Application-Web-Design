<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CultMovies</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-purple-100">
    <nav class="bg-purple-700 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">CultMovies</h1>
            <div class="space-x-4">
                <a href="{{ route('movies.index') }}" class="hover:text-purple-200">Movies</a>
                <a href="{{ route('characters.index') }}" class="hover:text-purple-200">Characters</a>
                <a href="{{ route('movies.create') }}" class="hover:text-purple-200">Add Movie</a>
                <a href="{{ route('characters.create') }}" class="hover:text-purple-200">Add Character</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto p-4">
        @if(session('success'))
            <x-alert type="success">
                {{ session('success') }}
            </x-alert>
        @endif

        @if(session('error'))
            <x-alert type="error">
                {{ session('error') }}
            </x-alert>
        @endif

        @if($errors->any())
            <x-alert type="error">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </x-alert>
        @endif

        @yield('content')
    </main>
</body>
</html>

@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <div class="flex space-x-4">
            <a href="{{ route('movies.index') }}" class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">All</a>
            <a href="{{ route('movies.index', ['filter' => 'past']) }}" class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">Past</a>
            <a href="{{ route('movies.index', ['filter' => 'upcoming']) }}" class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">Upcoming</a>
            <a href="{{ route('movies.index', ['filter' => 'recent']) }}" class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">Recent</a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($movies as $movie)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('storage/' . $movie->image_path) }}" alt="{{ $movie->name }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-purple-800">{{ $movie->name }}</h3>
                    <p class="text-gray-600">{{ $movie->classification }}</p>
                    <p class="text-sm text-gray-500">{{ $movie->release_date }}</p>
                    @if($movie->type === 'series')
                        <p class="text-sm text-purple-600">Season: {{ $movie->season }}</p>
                    @endif
                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('movies.edit', $movie) }}" class="px-3 py-1 bg-purple-500 text-white rounded hover:bg-purple-600">Edit</a>
                        <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $movies->links() }}
    </div>
@endsection

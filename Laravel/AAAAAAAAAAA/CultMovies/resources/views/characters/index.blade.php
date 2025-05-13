@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($characters as $character)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('storage/' . $character->image_path) }}" alt="{{ $character->name }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-purple-800">{{ $character->name }}</h3>
                    <p class="text-gray-600">{{ Str::limit($character->description, 100) }}</p>
                    
                    <div class="mt-2">
                        <h4 class="font-semibold text-purple-600">Appears in:</h4>
                        <div class="flex flex-wrap gap-1 mt-1">
                            @foreach($character->movies as $movie)
                                <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded text-sm">{{ $movie->name }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('characters.edit', $character) }}" class="px-3 py-1 bg-purple-500 text-white rounded hover:bg-purple-600">Edit</a>
                        <form action="{{ route('characters.destroy', $character) }}" method="POST" class="inline">
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
        {{ $characters->links() }}
    </div>
@endsection

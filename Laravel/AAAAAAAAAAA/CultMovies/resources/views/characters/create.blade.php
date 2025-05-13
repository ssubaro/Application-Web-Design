@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-bold text-purple-800 mb-6">Add New Character</h2>

        <form action="{{ route('characters.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name" class="w-full border rounded p-2" required>
                </div>

                <div>
                    <label class="block text-gray-700">Description</label>
                    <textarea name="description" class="w-full border rounded p-2" rows="4" required></textarea>
                </div>

                <div>
                    <label class="block text-gray-700">Appears in Movies/Series</label>
                    <div class="grid grid-cols-2 gap-2 mt-2">
                        @foreach($movies as $movie)
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="movie_ids[]" value="{{ $movie->id }}" class="text-purple-600">
                                <span>{{ $movie->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700">Image</label>
                    <input type="file" name="image" class="w-full border rounded p-2" required>
                </div>

                <button type="submit" class="w-full bg-purple-600 text-white py-2 px-4 rounded hover:bg-purple-700">
                    Add Character
                </button>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-bold text-purple-800 mb-6">Edit Movie/Series</h2>

        <form action="{{ route('movies.update', $movie) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name" value="{{ $movie->name }}" class="w-full border rounded p-2" required>
                </div>

                <div>
                    <label class="block text-gray-700">Type</label>
                    <select name="type" class="w-full border rounded p-2" required>
                        <option value="movie" {{ $movie->type === 'movie' ? 'selected' : '' }}>Movie</option>
                        <option value="series" {{ $movie->type === 'series' ? 'selected' : '' }}>Series</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700">Classification</label>
                    <select name="classification" class="w-full border rounded p-2" required>
                        <option value="action" {{ $movie->classification === 'action' ? 'selected' : '' }}>Action</option>
                        <option value="drama" {{ $movie->classification === 'drama' ? 'selected' : '' }}>Drama</option>
                        <option value="thriller" {{ $movie->classification === 'thriller' ? 'selected' : '' }}>Thriller</option>
                        <option value="comedy" {{ $movie->classification === 'comedy' ? 'selected' : '' }}>Comedy</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700">Release Date</label>
                    <input type="date" name="release_date" value="{{ $movie->release_date }}" class="w-full border rounded p-2" required>
                </div>

                <div>
                    <label class="block text-gray-700">Season (for series)</label>
                    <input type="number" name="season" value="{{ $movie->season }}" class="w-full border rounded p-2">
                </div>

                <div>
                    <label class="block text-gray-700">Review</label>
                    <textarea name="review" class="w-full border rounded p-2" rows="4" required>{{ $movie->review }}</textarea>
                </div>

                <div>
                    <label class="block text-gray-700">Image</label>
                    <input type="file" name="image" class="w-full border rounded p-2">
                    @if($movie->image_path)
                        <img src="{{ asset('storage/' . $movie->image_path) }}" class="mt-2 w-32 h-32 object-cover">
                    @endif
                </div>

                <button type="submit" class="w-full bg-purple-600 text-white py-2 px-4 rounded hover:bg-purple-700">
                    Update Movie/Series
                </button>
            </div>
        </form>
    </div>
@endsection

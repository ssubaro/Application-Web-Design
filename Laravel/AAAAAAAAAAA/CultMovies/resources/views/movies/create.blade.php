@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-bold text-purple-800 mb-6">Add New Movie/Series</h2>

        <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name" class="w-full border rounded p-2" required>
                </div>

                <div>
                    <label class="block text-gray-700">Type</label>
                    <select name="type" class="w-full border rounded p-2" required>
                        <option value="movie">Movie</option>
                        <option value="series">Series</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700">Classification</label>
                    <select name="classification" class="w-full border rounded p-2" required>
                        <option value="action">Action</option>
                        <option value="drama">Drama</option>
                        <option value="thriller">Thriller</option>
                        <option value="comedy">Comedy</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700">Release Date</label>
                    <input type="date" name="release_date" class="w-full border rounded p-2" required>
                </div>

                <div>
                    <label class="block text-gray-700">Season (for series)</label>
                    <input type="number" name="season" class="w-full border rounded p-2">
                </div>

                <div>
                    <label class="block text-gray-700">Review</label>
                    <textarea name="review" class="w-full border rounded p-2" rows="4" required></textarea>
                </div>

                <div>
                    <label class="block text-gray-700">Image</label>
                    <input type="file" name="image" class="w-full border rounded p-2" required>
                </div>

                <button type="submit" class="w-full bg-purple-600 text-white py-2 px-4 rounded hover:bg-purple-700">
                    Add Movie/Series
                </button>
            </div>
        </form>
    </div>
@endsection

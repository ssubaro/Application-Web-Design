<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('characters')->latest()->paginate(12);
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'classification' => 'required',
            'release_date' => 'required|date',
            'review' => 'required',
            'season' => 'nullable|integer',
            'image' => 'required|image',
            'type' => 'required|in:movie,series'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('movies', 'public');
            $validated['image_path'] = $path;
        }

        try {
            Movie::create($validated);
            return redirect()->route('movies.index')->with('success', 'Movie created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error creating movie')->withInput();
        }
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'name' => 'required',
            'classification' => 'required',
            'release_date' => 'required|date',
            'review' => 'required',
            'season' => 'nullable|integer',
            'image' => 'nullable|image',
            'type' => 'required|in:movie,series'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('movies', 'public');
            $validated['image_path'] = $path;
        }

        try {
            $movie->update($validated);
            return redirect()->route('movies.index')->with('success', 'Movie updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating movie')->withInput();
        }
    }

    public function destroy(Movie $movie)
    {
        try {
            $movie->delete();
            return redirect()->route('movies.index')->with('success', 'Movie deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting movie');
        }
    }
}

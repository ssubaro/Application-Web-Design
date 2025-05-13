<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Movie;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::with('movies')->paginate(12);
        return view('characters.index', compact('characters'));
    }

    public function create()
    {
        $movies = Movie::all();
        return view('characters.create', compact('movies'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'movie_ids' => 'required|array'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('characters', 'public');
            $validated['image_path'] = $path;
        }

        $character = Character::create($validated);
        $character->movies()->attach($request->movie_ids);

        return redirect()->route('characters.index');
    }

    public function edit(Character $character)
    {
        $movies = Movie::all();
        return view('characters.edit', compact('character', 'movies'));
    }

    public function update(Request $request, Character $character)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
            'movie_ids' => 'required|array'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('characters', 'public');
            $validated['image_path'] = $path;
        }

        $character->update($validated);
        $character->movies()->sync($request->movie_ids);

        return redirect()->route('characters.index');
    }

    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('characters.index');
    }
}

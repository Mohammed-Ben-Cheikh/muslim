<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecettesController
{
    public function index()
    {
        return view('recettes');
    }

    public function create()
    {
        return view('recettes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
            'preparation_time' => 'required|integer',
            'cooking_time' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('recettes', 'public');
            $validated['image'] = $imagePath;
        }

        Recette::create($validated);

        return redirect()->route('recettes.index')->with('success', 'Recette créée avec succès!');
    }

    public function get($id)
    {
        $recette = Recette::findOrFail($id);
        return view('recette', compact('recette'));
    }
}

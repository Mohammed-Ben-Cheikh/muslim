<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class RecettesController
{
    protected $table = 'recettes';
    public function index()
    {
        $recettes = Recette::all();
        return view('recettes', ['recettes' => $recettes]);
    }

    public function create()
    {
        return view('recettes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|max:255',
            'ingredients' => 'required|max:255',
            'instructions' => 'required|max:255',
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
        $com = Commentaire::where('recette_id', $id)->get();
        $recette = Recette::findOrFail($id);
        return view('recette', compact('recette','com'));
    }
}

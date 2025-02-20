<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ExperiencesController 
{
    protected $table = 'experiences';
    public function index()
    {
        $experiences = Experience::all();
        return view('experiences', ['experiences' => $experiences]);
    }

    public function create()
    {
        return view('experiences.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:50',
            'content' => 'required|max:255',
            'date' => 'required|date',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('experiences', 'public');
            $validated['image'] = $imagePath;
        }

        Experience::create($validated);

        return redirect()
            ->route('experiences.index')
            ->with('success', 'Expérience créée avec succès!');
    }

    public function get($id)
    {
        $experience = Experience::findOrFail($id);
        return view('experience', compact('experience'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Recette;
use App\Models\Commentaire;

class HomeController 
{
    public function index()
    {
        return view('home', [
            'experiences' => Experience::latest()->take(2)->get(),
            'recettes' => Recette::withCount('comments')
                ->orderBy('comments_count', 'desc')
                ->take(2)
                ->get(),
            'stats' => [
                'users' => Commentaire::count(),
                'experiences' => Experience::count(),
                'recettes' => Recette::count(),
            ]
        ]);
    }
}
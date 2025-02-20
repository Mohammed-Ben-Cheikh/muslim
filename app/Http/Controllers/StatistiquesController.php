<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Experience;
use App\Models\Commentaire;

class StatistiquesController
{
    public function index()
    {
        return view('statistiques', [
            'totalRecettes' => Recette::count(),
            'totalExperiences' => Experience::count(),
            'totalCommentaires' => Commentaire::count(),
        ]);
    }
}

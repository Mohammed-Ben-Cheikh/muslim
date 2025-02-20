<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'contenu' => 'required|string|max:1000',
            'recette_id' => 'required|exists:recettes,id'
        ]);

        $commentaire = new Commentaire();
        $commentaire->contenu = $validated['contenu'];
        $commentaire->recette_id = $validated['recette_id'];
        $commentaire->save();

        return redirect()->back()->with('success', 'Commentaire ajouté avec succès!');
    }
}

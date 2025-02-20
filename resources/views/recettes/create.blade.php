@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Ajouter une recette</h2>
    <form action="{{ route('recettes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Titre de la recette</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div>
            <label for="category">category</label>
            <select name="category" id="category">
                <option value=""></option>
            </select>
        </div>
        <div class="form-group">
            <label for="ingredients">Ingrédients</label>
            <textarea class="form-control" id="ingredients" name="ingredients" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="instructions">Instructions</label>
            <textarea class="form-control" id="instructions" name="instructions" rows="6" required></textarea>
        </div>
        <div class="form-group">
            <label for="preparation_time">Temps de préparation (minutes)</label>
            <input type="number" class="form-control" id="preparation_time" name="preparation_time" required>
        </div>
        <div class="form-group">
            <label for="cooking_time">Temps de cuisson (minutes)</label>
            <input type="number" class="" id="cooking_time" name="cooking_time" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Enregistrer la recette</button>
    </form>
</div>
@endsection

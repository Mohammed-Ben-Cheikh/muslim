<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\RecettesController;
use App\Http\Controllers\StatistiquesController;
use App\Http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/experiences', [ExperiencesController::class, 'index'])->name('experiences.index');
Route::get('/recettes', [RecettesController::class, 'index'])->name('recettes.index');
Route::get('/statistiques', [StatistiquesController::class, 'index'])->name('statistiques');

Route::get('/experiences/create', [ExperiencesController::class, 'create'])->name('experiences.create');
Route::post('/experiences/store', [ExperiencesController::class, 'store'])->name('experiences.store');
Route::get('/recettes/create', [RecettesController::class, 'create'])->name('recettes.create');
Route::post('/recettes/store', [RecettesController::class, 'store'])->name('recettes.store');

Route::get('/experiences/{id}', [ExperiencesController::class, 'get']);
Route::get('/recettes/{id}', [RecettesController::class, 'get']);

Route::post('/commentaires', [CommentaireController::class, 'store'])->name('commentaires.store');
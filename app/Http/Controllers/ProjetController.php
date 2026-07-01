<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Technologie;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        $projets = Projet::with('technologies')->ordered()->get();
        $categories = Projet::select('categorie')->distinct()->pluck('categorie');
        
        return view('pages.projets', compact('projets', 'categories'));
    }

    public function show($slug)
    {
        $projet = Projet::with('technologies')->where('slug', $slug)->firstOrFail();
        $projetsSimilaires = Projet::where('categorie', $projet->categorie)
            ->where('id', '!=', $projet->id)
            ->take(3)
            ->get();
        
        return view('pages.projet-detail', compact('projet', 'projetsSimilaires'));
    }
}
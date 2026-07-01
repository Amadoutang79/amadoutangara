<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Statistique;
use App\Models\Technologie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function accueil()
    {
        $statistiques = Statistique::ordered()->get();
        $projetsRecents = Projet::ordered()->take(3)->get();
        $technologies = Technologie::all();
        
        return view('pages.accueil', compact('statistiques', 'projetsRecents', 'technologies'));
    }

    public function apropos()
    {
        $technologies = Technologie::all();
        return view('pages.apropos', compact('technologies'));
    }

    public function competences()
    {
        $technologies = Technologie::all();
        return view('pages.competences', compact('technologies'));
    }

    public function experience()
    {
        return view('pages.experience');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
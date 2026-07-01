<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use App\Models\Technologie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjetController extends Controller
{
    public function index()
    {
        $projets = Projet::with('technologies')->ordered()->get();
        return view('admin.projets.index', compact('projets'));
    }

    public function create()
    {
        $technologies = Technologie::all();
        return view('admin.projets.create', compact('technologies'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description_courte' => 'required|string',
            'description_complete' => 'nullable|string',
            'categorie' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'image_secondaire' => 'nullable|image|max:2048',
            'lien_demo' => 'nullable|url',
            'lien_code' => 'nullable|url',
            'est_en_avant' => 'boolean',
            'ordre' => 'integer',
            'technologies' => 'array',
            'technologies.*' => 'exists:technologies,id'
        ]);

        $validated['slug'] = Str::slug($validated['titre']);
        $validated['est_en_avant'] = $request->has('est_en_avant');

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projets', 'public');
        }

        if ($request->hasFile('image_secondaire')) {
            $validated['image_secondaire'] = $request->file('image_secondaire')->store('projets', 'public');
        }

        $projet = Projet::create($validated);

        if ($request->has('technologies')) {
            $projet->technologies()->attach($request->technologies);
        }

        return redirect()->route('admin.projets.index')
            ->with('success', 'Projet créé avec succès !');
    }

    public function edit(Projet $projet)
    {
        $technologies = Technologie::all();
        return view('admin.projets.edit', compact('projet', 'technologies'));
    }

    public function update(Request $request, Projet $projet)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description_courte' => 'required|string',
            'description_complete' => 'nullable|string',
            'categorie' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'image_secondaire' => 'nullable|image|max:2048',
            'lien_demo' => 'nullable|url',
            'lien_code' => 'nullable|url',
            'est_en_avant' => 'boolean',
            'ordre' => 'integer',
            'technologies' => 'array',
            'technologies.*' => 'exists:technologies,id'
        ]);

        $validated['slug'] = Str::slug($validated['titre']);
        $validated['est_en_avant'] = $request->has('est_en_avant');

        if ($request->hasFile('image')) {
            if ($projet->image) {
                Storage::disk('public')->delete($projet->image);
            }
            $validated['image'] = $request->file('image')->store('projets', 'public');
        }

        if ($request->hasFile('image_secondaire')) {
            if ($projet->image_secondaire) {
                Storage::disk('public')->delete($projet->image_secondaire);
            }
            $validated['image_secondaire'] = $request->file('image_secondaire')->store('projets', 'public');
        }

        $projet->update($validated);

        $projet->technologies()->sync($request->technologies ?? []);

        return redirect()->route('admin.projets.index')
            ->with('success', 'Projet mis à jour avec succès !');
    }

    public function destroy(Projet $projet)
    {
        if ($projet->image) {
            Storage::disk('public')->delete($projet->image);
        }
        if ($projet->image_secondaire) {
            Storage::disk('public')->delete($projet->image_secondaire);
        }

        $projet->technologies()->detach();
        $projet->delete();

        return redirect()->route('admin.projets.index')
            ->with('success', 'Projet supprimé avec succès !');
    }
}
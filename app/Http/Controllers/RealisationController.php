<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Realisation;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;


class RealisationController extends Controller
{
    /**
     * Affiche les réalisations (vidéos + images)
     */
    public function index()
    {
        $videos = Realisation::where('type', 'video')->get();
        $images = Realisation::where('type', 'image')->get();

        return view('realisation', compact('videos', 'images'));
    }
// Pour l'edition des donnees
    public function edit($id)
{
    $realisation = Realisation::findOrFail($id);
    return view('realisations.edit', compact('realisation'));
}
// Pour effacer les fichiers

public function destroy($id)
{
    $realisation = Realisation::findOrFail($id);
    
    // Supprimer le fichier image du stockage si c'est une image
    if ($realisation->type === 'image' && $realisation->url) {
        Storage::disk('public')->delete($realisation->url);
    }
    
    $realisation->delete();

    return redirect()->route('realisation')->with('success', 'Réalisation supprimée avec succès.');
}

    /**
     * Enregistre une nouvelle réalisation (image ou vidéo)
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:video,image',
            'url' => 'nullable|url',
            'image_file' => 'nullable|image|max:2048',
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $url = $request->input('url');

        // Si c'est une vidéo YouTube
        if ($request->type === 'video') {
            preg_match('/(?:v=|\/embed\/|youtu.be\/)([^&]+)/', $url, $matches);
            $videoId = $matches[1] ?? null;

            if ($videoId) {
                $api = "https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=$videoId&format=json";
                try {
                    $response = Http::get($api);
                    if ($response->ok()) {
                        $data = $response->json();
                        $title = $title ?: $data['title'];
                        $description = $description ?: $data['author_name'];
                        $url = "https://www.youtube.com/embed/$videoId";
                    }
                } catch (\Exception $e) {
                    // on garde les champs saisis si l’API échoue
                }
            }
        }

        // Si c'est une image
        if ($request->type === 'image') {
            if ($request->hasFile('image_file')) {
                $url = $request->file('image_file')->store('uploads', 'public');
                $title = $title ?: $request->file('image_file')->getClientOriginalName();
            }
        }

        Realisation::create([
            'type' => $request->type,
            'url' => $url,
            'title' => $title,
            'description' => $description,
        ]);

        return back()->with('success', 'Ajouté avec succès !');
    }

    // Pour le update des fichiers

    public function update(Request $request, $id)
{
    $realisation = Realisation::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'url' => 'nullable|url',
        'image_file' => 'nullable|image|max:2048',
    ]);

    $realisation->title = $request->title;
    $realisation->description = $request->description;

    if ($realisation->type === 'video') {
        $realisation->url = $request->url;
    } elseif ($realisation->type === 'image' && $request->hasFile('image_file')) {
        $realisation->url = $request->file('image_file')->store('uploads', 'public');
    }

    $realisation->save();

    return redirect()->route('realisation')->with('success', 'Réalisation mise à jour.');
}

}

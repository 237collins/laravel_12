<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');

        Image::create([
            'titre' => $request->titre,
            'image_path' => $imagePath
        ]);

        return back()->with('success', 'Image importée avec succès.');
    }
}


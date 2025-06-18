<?php

use Illuminate\Support\Facades\Route;



// Route pour la page d’accueil
Route::get('/', function () {
    return view('home');
})->name('home');

// Route pour la page des tarifs
Route::get('/tarif', function () {
    return view('tarif');
})->name('tarif');


// Route pour la page des realisations
Route::get('/realisation', function () {
    return view('realisation');
})->name('realisation');

// Route pour la page des ajuster les liens youtube
Route::get('/embed', function () {
    return view('embed');
})->name('embed');

// pour l'import des images
use App\Http\Controllers\ImageController;

Route::post('/upload-image', [ImageController::class,
'store'])->name('upload.image');

# 
use App\Http\Controllers\ContactController;

Route::get('/sections/contact', function () {
    return view('sections.contact');
})->name('contact.form');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


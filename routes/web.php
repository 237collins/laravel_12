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
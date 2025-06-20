<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Routes accessibles à tous
|--------------------------------------------------------------------------
*/

// Page d’accueil
Route::get('/', function () {
    return view('home');
})->name('home');

// Page des tarifs
Route::get('/tarif', function () {
    return view('tarif');
})->name('tarif');

// Réalisations
Route::get('/realisation', function () {
    return view('realisation');
})->name('realisation');

// Projets Dev
Route::get('/projet_dev', function () {
    return view('projet_dev');
})->name('projet_dev');

// Page de contact
Route::get('/sections/contact', function () {
    return view('sections.contact');
})->name('contact.form');

// Traitement du formulaire de contact
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Upload d’image
// Route::post('/upload-image', [ImageController::class, 'store'])->name('upload.image');

// Nouveau code d'upload
use App\Http\Controllers\RealisationController;

Route::post('/realisation', [RealisationController::class, 'store'])->name('realisation.store');
// nouvelle ajout
Route::get('/realisation', [RealisationController::class, 'index'])->name('realisation');
Route::delete('/realisation/{id}', [RealisationController::class, 'destroy'])->name('realisation.destroy');
Route::get('/realisation/{id}/edit', [RealisationController::class, 'edit'])->name('realisation.edit');
Route::put('/realisation/{id}', [RealisationController::class, 'update'])->name('realisation.update');
Route::delete('/realisation/{id}', [RealisationController::class, 'destroy'])->name('realisation.destroy');



/*
|--------------------------------------------------------------------------
| Routes protégées par auth (Breeze)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    // Tableau de bord
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Page embed uniquement pour les utilisateurs connectés
    Route::get('/embed', function () {
        return view('embed');
    })->name('embed');

    // Gestion du profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Auth routes Breeze
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Page;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/about', [AboutController::class,'index'])->name('about.index');
Route::get('/galery', [GalleryController::class,'index'])->name('galery.index');
Route::get('/contact', [ContactController::class,'index'])->name('contact.index');
Route::post('/contato', [ContactController::class, 'send'])->name('contact.send');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/terms',function() {
    $nav = Page::all();
    return view('pages.termos',compact('nav'));
})->name('termos');

Route::get('/responsability',function() {
    $nav = Page::all();
    return view('pages.responsability',compact('nav'));
})->name('responsability');

Route::middleware(['auth', 'verified'])->group(function () {

    // Página do formulário de cadastro de pet
    Route::get('/formCadrastoPet', function () {
        $nav = Page::all();
        return view('pages.formCadrastoPet', compact('nav'));
    })->name('formCadrastoPet');

    // Rota para salvar pet
    Route::post('/pets', [GalleryController::class, 'store'])->name('pets.store');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

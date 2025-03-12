<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubserviceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
})->name('front.index');
Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('front.index');
    Route::get('/about', 'about')->name('front.about');
    Route::get('/service', 'service')->name('front.service');
    Route::get('/service/{service}/subservices', 'subservices')->name('front.subservices');
    Route::get('/blog', 'blog')->name('front.blog');
    Route::get('/contact', 'contact')->name('front.contact');
    Route::get('/team', 'team')->name('front.team');
    Route::get('/why-kuta', 'whyKuta')->name('front.why-kuta');
    Route::get('/in-the-media', 'inTheMedia')->name('front.in-the-media');
    Route::post('/thank-you', 'thankYou')->name('front.thank-you');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
    Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
    Route::get('/teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');
    Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
    Route::put('/teams/{team}', [TeamController::class, 'update'])->name('teams.update');
    Route::delete('/teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');
    Route::resource('services', ServiceController::class);
    Route::resource('services.subservices', SubserviceController::class)->except(['index']);
});

require __DIR__ . '/auth.php';

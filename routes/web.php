<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/songs',[SongsController::class, 'index'])->name('songs.index');
Route::get('/songs/create',[SongsController::class, 'create'])->name('songs.create');
Route::post('/songs',[SongsController::class, 'store'])->name('songs.store');
Route::get('/songs/{song}',[SongsController::class, 'show'])->name('songs.show');
Route::get('/songs/{song}/edit',[SongsController::class, 'edit'])->name('songs.edit');
Route::put('/songs/{song}',[SongsController::class, 'update'])->name('songs.update');
Route::delete('/songs/{song}',[SongsController::class, 'destroy'])->name('songs.destroy');

//home routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\SongController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

// Route::get('/', [PublicController::class, 'index'])->name('homepage');

// rotte SongController
route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');
Route::post('/songs/store', [SongController::class, 'store'])->name('songs.store');
Route::get('/', [SongController::class, 'index'])->name('songs.index');
// route::get('/songs/edit/{songs}', [SongController::class, 'edit'])->name('songs.edit');
route::get('/songs/detail/{song}', [SongController::class, 'show'])->name('songs.show');

route::get('/songs/edit/{song}', [SongController::class, 'edit'])->name('songs.edit');

route::put('/songs/update/{song}', [SongController::class, 'update'])->name('songs.update');

route::delete('/songs/delete/{song}', [SongController::class, 'destroy'])->name('songs.delete');

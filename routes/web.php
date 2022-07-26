<?php

use App\Http\Controllers\DeckController;
use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CardController::class, 'home'])->name('home');
Route::get('/decks', [CardController::class, 'deck'])->name('listDeck');
Route::get('/cards', [CardController::class, 'card'])->name('createCard');

Route::post('/', [CardController::class, 'create'])->name('create');

//deck routes
Route::post('/criardeck', [DeckController::class, 'create'])->name('createDeck');
Route::get('/mostrardeck', [DeckController::class, 'show'])->name('showDeck');



//global routes
Route::delete('/{id}', [CardController::class, 'destroy'])->name('delete');
Route::get('/{id}', [CardController::class, 'edit'])->name('editar');
Route::put('/{id}', [CardController::class, 'update'])->name('atualizar');


<?php


use App\Http\Controllers\DeckController;
use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

//button routes
Route::get('/', [CardController::class, 'home'])->name('home');
Route::get('/decklist', [DeckController::class, 'show'])->name('deckList');


//deck routes
Route::post('/criardeck', [DeckController::class, 'create'])->name('createDeck');

//card routes
Route::get('/cards', [CardController::class, 'card'])->name('createCard');
Route::post('/', [CardController::class, 'create'])->name('create');

//global routes
Route::delete('/{id}', [CardController::class, 'destroy'])->name('delete');
Route::get('/{id}', [CardController::class, 'edit'])->name('editar');
Route::put('/{id}', [CardController::class, 'update'])->name('atualizar');


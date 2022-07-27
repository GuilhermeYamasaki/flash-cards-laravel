<?php


use App\Http\Controllers\DeckController;
use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CardController::class, 'home'])->name('home');
Route::get('/decklist', [DeckController::class, 'show'])->name('deckList'); //rota para a página com decks


//deck routes
Route::post('/criardeck', [DeckController::class, 'create'])->name('createDeck');
Route::delete('/deletardeck/{id}', [DeckController::class, 'delete'])->name('deleteDeck');


//card routes
Route::get('/cards', [CardController::class, 'card'])->name('createCard'); //rota para a página de cartas
Route::post('/', [CardController::class, 'create'])->name('create');

//global routes
Route::delete('/{id}', [CardController::class, 'destroy'])->name('delete');
Route::get('/{id}', [CardController::class, 'edit'])->name('editar');
Route::put('/{id}', [CardController::class, 'update'])->name('atualizar');


<?php

use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

//nome da rota -> nome do controller -> função usada no controller
Route::get('/', [CardController::class, 'home'])->name('home.index');
Route::get('/decks', [CardController::class, 'deck'])->name('deck.deckList');
Route::get('/decks/cards', [CardController::class, 'card'])->name('deck.deckList');

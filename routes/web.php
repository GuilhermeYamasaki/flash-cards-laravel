<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\DeckController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//nome da rota -> nome do controller -> função usada no controller

//rota home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/decks', [DeckController::class, 'index'])->name('deck.index');

Route::post('/novodeck', [CardController::class, 'createDeck'])->name('createDeck');

Route::get('/cards/new', [CardController::class, 'create'])->name('card.create');
Route::post('/cards', [CardController::class, 'store'])->name('card.store');

// Route::post('/', [CardController::class, 'create'])->name('create');

// //deck routes
// Route::get('/novodeck', [CardController::class, 'showDeck'])->name('showDeck'); //essa rota e ta acessando /decks

// //global routes
// Route::delete('/{id}', [CardController::class, 'destroy'])->name('delete');
// Route::get('/{id}', [CardController::class, 'edit'])->name('editar');
// Route::put('/{id}', [CardController::class, 'update'])->name('atualizar');


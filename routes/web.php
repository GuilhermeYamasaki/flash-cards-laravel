<?php

use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

//nome da rota -> nome do controller -> função usada no controller
Route::get('/', [CardController::class, 'home'])->name('home');
Route::get('/decks', [CardController::class, 'deck'])->name('listDeck');
Route::get('/cards', [CardController::class, 'card'])->name('createCard');

Route::post('/', [CardController::class, 'create'])->name('create');

//deck routes
Route::post('/novodeck', [CardController::class, 'createDeck'])->name('createDeck');
Route::get('/novodeck', [CardController::class, 'showDeck'])->name('showDeck'); //essa rota e ta acessando /decks

//global routes
Route::delete('/{id}', [CardController::class, 'destroy'])->name('delete');
Route::get('/{id}', [CardController::class, 'edit'])->name('editar');
Route::put('/{id}', [CardController::class, 'update'])->name('atualizar'); 


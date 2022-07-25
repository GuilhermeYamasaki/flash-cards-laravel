<?php

use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

//nome da rota -> nome do controller -> função usada no controller
Route::get('/', [CardController::class, 'home'])->name('home');
Route::get('/decks', [CardController::class, 'deck'])->name('listDeck');
Route::get('/cards', [CardController::class, 'card'])->name('createCard');
Route::post('', [CardController::class, 'create'])->name('create');


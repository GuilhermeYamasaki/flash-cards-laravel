<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Deck;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DeckController extends Controller
{

    public function index(): View
    {
        $decks = Deck::get('name');
        return view('deck.index', compact('decks'));
    }


    public function card(): View
    {
        $cards = Card::get(['id','front','back']);
        return view('deck.cardCreate', compact('cards'));
    }


    public function create(Request $request): RedirectResponse
    {
        $newCards = $request->all();
        Card::create($newCards);
        return redirect()->route('createCard');
    }


    public function destroy(int $id): RedirectResponse
    {
        Card::findOrFail($id)->delete();
        return redirect()->route('createCard');
    }


    public function edit(int $id)
    {
        try {
            $takeCard = Card::findOrFail($id);
        }
        catch(Exception $exception) {
            return redirect()->route('createCard');
        }

        return view('deck.edit', compact('takeCard')); //leva dados para o edit.blade id, front e back
    }


    public function update(Request $request, $id)
    {
        $newData = $request->all(); //novos dados vindo do form

        Card::findOrFail($id)->update($newData);

        return redirect()->route('createCard');
    }

    //deck
    public function createDeck(Request $request): RedirectResponse
    {
        $newDeck = $request->all(); //pega input do deckname e armazena no $newDeck
        Deck::create($newDeck);//sala o valor do input no banco
        return redirect()->route('showDeck');
    }

    public function showDeck(): View
    {
        $deckName = Deck::get('name'); //tava venbdo outra coisa
        return view('deck.deckList', compact('deckName'));

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DeckController extends Controller
{
    public function create(Request $request): RedirectResponse
    {
        $newDeck = $request->all();
        Deck::create($newDeck);
        return redirect()->route('deckList');
    }

    public function show():View //pega os dados e redireciona para outra view
    {
        $deckName = Deck::get(['id','name']);
        return view('deck.deckList', compact(['deckName']));
    }

    public function delete(int $id): RedirectResponse
    {
        Deck::findOrFail($id)->delete();
        return redirect()->route('deckList');
    }


}

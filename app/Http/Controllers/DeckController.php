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
        return redirect()->route('showDeck');
    }

    public function show():View
    {
        $deckName = Deck::get(['id','name']);
        return view('deck.deckList', compact('deckName'));
    }

    
}

<?php

namespace App\Http\Controllers;

use App\Models\Cards;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CardController extends Controller
{
    public function home(): View
    {
        return view('home.home');
    }

    public function deck(): View
    {
        return view('deck.deckList');
    }

    public function card(): View
    {
        $cards = Cards::get(['front','back']);
        return view('deck.cardCreate', compact('cards'));
    }

    public function create(Request $request): RedirectResponse
    {
        $newCards = $request->all();
        Cards::create($newCards);
        return redirect()->route('home');
    } 





    
}

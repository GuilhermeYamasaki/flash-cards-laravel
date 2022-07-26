<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Deck;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CardController extends Controller
{

    public function create(): View
    {
        $decks = Deck::get(['id', 'name']);
        return view('card.new', compact('decks'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();

        Card::create($data);

        return redirect()->route('home');
    }
}

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
        $cards = Cards::get(['id','front','back']);
        return view('deck.cardCreate', compact('cards'));
    }


    public function create(Request $request): RedirectResponse
    {
        $newCards = $request->all();
        Cards::create($newCards);
        return redirect()->route('createCard');
    }


    public function destroy(int $id): RedirectResponse
    {
        Cards::findOrFail($id)->delete();
        return redirect()->route('createCard');
    }


    public function edit(int $id)
    {
        try {
            $takeCard = Cards::findOrFail($id);
        }
        catch(Exception $exception) {
            return redirect()->route('createCard');
        }

        return view('deck.edit', compact('takeCard')); //leva dados para o edit.blade id, front e back
    }


    public function update(Request $request, $id)
    {
        $newData = $request->all(); //novos dados vindo do form

        Cards::findOrFail($id)->update($newData);

        return redirect()->route('createCard');
    }


    
}

<?php

namespace App\Http\Controllers;

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








    
}

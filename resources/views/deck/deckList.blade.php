@extends('layouts.main')
@section('body')
    <h1>Bem-vindo ao seus decks</h1>
    <h2>Seus decks:</h2>
    <div>
        @foreach($deckName as $name)
            <p>{{ $name->deck }}</p>
            <a href=" {{ route('createCard') }}">Criar/Editar</a>
            <a href="#">Iniciar estudos</a>
        @endforeach    
    </div>

    <div>
       <h2>Criar novo deck</h2>
        <form action="{{ route('createDeck') }}" method="POST">
            @csrf
            <input type="text" placeholder="Seu novo deck" name="deck" required />
            <button>Criar deck</button>
        </form> 
    </div>
    
    

@endsection
@extends('layouts.main')
@section('body')
    <h1>Bem-vindo ao seus decks</h1>
    <h2>Seus decks:</h2>
    <div>
        <p>Nome dos decks ficam aqui</p>
        @foreach($deckName as $deck)
            <p>{{ $deck->name }}</p>
            <a href="#">Criar/Editar</a>
            <a href="#">Iniciar estudos</a>
        @endforeach
    </div>

    <div>
       <h2>Criar novo deck</h2>
        <form action="{{ route('createDeck') }}" method="POST">
            @csrf
            <input type="text" placeholder="Seu novo deck" name="name" required />
            <button>Criar deck</button>
        </form>
    </div>



@endsection

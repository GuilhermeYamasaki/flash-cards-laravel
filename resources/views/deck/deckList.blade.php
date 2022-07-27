@extends('layouts.main')
@section('body')
    <h1>Bem-vindo ao seus decks</h1>
    <h2>Seus decks:</h2>
    <div>
        @if($deckName->isEmpty())
            <p>Você ainda não criou decks.</p>
            <p>Bora criar um deck novo ?</p>
        @else

            @foreach($deckName as $deck)
                <p>{{ $deck->name }}</p>
                <a href="{{ route('createCard') }}">Criar/Editar</a>
                <a href="#">Iniciar estudos</a>
                <form action="{{ route('deleteDeck', $deck->id) }} " method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Deletar deck</button>
                </form>
            @endforeach

        @endif
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

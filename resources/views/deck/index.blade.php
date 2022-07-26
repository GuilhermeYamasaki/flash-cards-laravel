@extends('layouts.main')
@section('body')
    <h1>Bem-vindo ao seus decks</h1>
    <h2>Seus decks:</h2>

    <div>
        @if($decks->isEmpty())
            <h3>Não tem nenhum deck cadastrado :(</h3>
        @else
            @foreach($decks as $deck)
                <p>{{ $deck->name }}</p>
                <a href="#">EDITAR BARALHO</a>
                <a href="#">INICIAR ESTUDOS</a>
            @endforeach
        @endif
    </div>
    {{-- {{ route('createCard') }} --}}
    <div>
       <h2>Criar novo deck</h2>
        <form action="{{ route('createDeck') }}" method="POST">
            @csrf
            <input type="text" placeholder="Seu novo deck" name="deck" required />
            <button>Criar deck</button>
        </form>
    </div>


    {{-- {{ route('createDeck') }} --}}
@endsection

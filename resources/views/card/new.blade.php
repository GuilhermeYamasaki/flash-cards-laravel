@extends('layouts.main')
@section('body')

    <div>
       <h2>Criar nova carta</h2>
        <form action="{{ route('card.store') }}" method="POST">
            @csrf
            <input type="text" name="front" placeholder="front">
            <input type="text" name="back" placeholder="back">
            <select name="deck_id" required>
                <option value="" disabled selected>SELECIONE UM DECK</option>
                @foreach ($decks as $deck)
                    <option value="{{ $deck->id }}">{{ $deck->name }}</option>
                @endforeach
            </select>
            <button>Criar</button>
        </form>
    </div>

@endsection

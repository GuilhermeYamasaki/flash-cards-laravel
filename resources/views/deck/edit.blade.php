@extends('layouts.main')
@section('body')
    <h1>Edite sua carta</h1>

    <form action="{{ route('atualizar', $takeCard->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="front" placeholder="front" value="{{ $takeCard->front }}" required />
        <input type="text" name="back" placeholder="back"  value="{{ $takeCard->back }}" required />
        <button>Atualizar usuario</button>
    </form>
@endsection
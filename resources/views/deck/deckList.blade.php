@extends('layouts.main')
@section('body')
    <h1>Bem-vindo ao seus decks</h1>
    <h2>Seus decks:</h2>
    <div>
        <a href=" {{route('createCard') }}">Criar/Editar</a>
        <a href="#">Iniciar estudos</a>
    </div>
@endsection
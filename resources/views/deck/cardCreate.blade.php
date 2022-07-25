@extends('layouts.main')
@section('body')
    <h1>Tela de criação de cartas</h1>

    <h2>Crie cartas</h2>
    <div>
        <form action="{{ route('create') }}" method="POST">
            @csrf
            <input type="text" name="front" placeholder="front" required />
            <input type="text" name="back" placeholder="back" required />
            <button>Criar carta</button>
        </form>
    </div>

    <h2>Suas cartas</h2>

    <table>
        <thead>
            <tr>
                <th>Frente</th>
                <th>Verso</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cards as $card)
                <tr>
                    <td>{{ $card->front }}</td>
                    <td>{{ $card->back }}</td>
                    <th>
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Deletar</button>
                        </form>
                        <a href="#">Editar</a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flash Cards</title>
</head>
<body>
    <div>
        <a href="{{ route('home.index') }}">Home</a>
        <a href="{{ route('deck.deckList') }}">Decks</a>
        <a href="#">Options</a>
    </div>
    @yield('body')
</body>
</html>
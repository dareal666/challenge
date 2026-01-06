<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Jokes</title>
</head>
<body>

    @foreach ($randomJokes as $joke)
        <ul>
            <li><strong>Setup:</strong> {{ $joke['setup'] }}</li>
            <li><strong>Punchline:</strong> {{ $joke['punchline'] }}</li>
        </ul>
    @endforeach

    <form method="GET" action="{{ route('jokes.index') }}">
        <button type="submit">Refresh</button>
    </form>

</body>
</html>

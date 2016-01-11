<html>
<head>
    <title>Determination — Jokesss!</title>
</head>

<body style="background: #000000">
    @foreach($joke as $joke_part)
        @include('glitch-partial', ['joke' => $joke_part])
    @endforeach

    <div style="position: relative; top: 50%; transform: translateY(-50%); padding: 2em 4em;">
        <p><a href="{{ route('jokes') }}">Another?</a></p
    </div>
</body>
</html>



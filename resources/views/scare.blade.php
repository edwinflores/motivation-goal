<html>
<head>
    <title>Determination — Scares!</title>
</head>

<body style="background: #000000">
@foreach($scare as $scare_part)
    @include('glitch-partial', ['joke' => $scare_part])
@endforeach

<div style="position: relative; top: 50%; transform: translateY(-50%); padding: 2em 4em;">
    <p><a href="{{ route('scary') }}">Another?</a></p>
</div>
</body>
</html>



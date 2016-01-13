{{--<html>--}}
{{--<head>--}}
    {{--<title>Determination — Jokesss!</title>--}}
{{--</head>--}}

{{--<body style="background: #000000">--}}
    {{--@foreach($joke as $joke_part)--}}
        {{--@include('glitch-partial', ['joke' => $joke_part])--}}
    {{--@endforeach--}}

    {{--<div style="position: relative; top: 50%; transform: translateY(-50%); padding: 2em 4em;">--}}
        {{--<p><a href="{{ route('jokes') }}">Another?</a></p--}}
    {{--</div>--}}
{{--</body>--}}
{{--</html>--}}

<html>
    <head>
        <title>Determination — Jokesss!</title>
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="stitch-container-body">
        <div class="stitch-container">
            <p class="stitch-container-text">{{ $joke }}</p>
        </div>
        <a href="{{ route('jokes') }}" style="text-align: center; color: #f5f5f5">
            <div class="stitch-container">
                <span style="font-size: 20px">Another?</span>
            </div>
        </a>
    </body>
</html>
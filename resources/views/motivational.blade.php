<html>
<head>
    <title>Determination — Motivational!</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400,700|Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>
<body style="background-image: url('/img/motivational/{{ rand(1, 30) }}.jpg')">
<div class="container">
    <div class="quote-container">
        <p class="text">{{$random_quote->text}}</p>
        <p class="author">&mdash; {{$random_quote->author}}</p>
        <p><a href="{{ route('motivational') }}">Another?</a></p
    </div>
</div>
</body>
</html>  
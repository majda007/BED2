<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clan</title>
</head>
<body>
    <h1> Clan</h1>

    <o1>
       @foreach ($clans05s as $clan)
       <li>{{$clan->ime}}  {{clan->prezime}} 
</li>
@endforeach


</o1>
<a href="{{route('clan.create')}}"> Dodaj novu knjigu </a>
</body>
</html>
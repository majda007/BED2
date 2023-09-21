<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knjiga</title>
</head>
<body>
    <h1> Knjiga </h1>

    <o1>
       @foreach ($knjige05s as $knjiga)
       <li>{{$knjiga->naslov}}  {{$knjiga->autor}}({{$knjiga->izdavac}})
</li>
@endforeach


</o1>
<a href="{{route('knjiga.create')}}"> Dodaj novu knjigu </a>
</body>
</html>

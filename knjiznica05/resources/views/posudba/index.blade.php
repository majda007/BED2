<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posudba</title>
</head>
<body>
    <h1> Posudba </h1>

    <o1>
       @foreach ($posudbe05s as $posudba)
       <li>{{$posudba->id}}  {{posudba->id_clan}} {{$posudba->id_knjiga}}
</li>
@endforeach


</o1>
<a href="{{route('posudba.create')}}"> Dodaj novu posudbu </a>
</body>
</html>
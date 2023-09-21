<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj knjigu</title>
</head>
<body>
    <form action="{{route('knjiga.store')}}" method="post">
        @csrf
        <label> Naslov </label> <br>
        <input type="text" name="naslov"><br>

        <label> Autor</label> <br>
        <input type="text" name="autor"><br>
        <label> Izdavac</label> <br>
        <input type="text" name="izdavac"><br>

        <button type="submit">SAVE</button>
</form>
</body>
</html>
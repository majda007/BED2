<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj clana</title>
</head>
<body>
    <form action="{{route('clan.store')}}" method="post">
        @csrf
        <label> Ime </label> <br>
        <input type="text" name="ime"><br>

        <label> Prezime</label> <br>
        <input type="text" name="prezime"><br>
      

        <button type="submit">SAVE</button>
</form>
</body>
</html>
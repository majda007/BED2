<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="/add" method="POST">
        @csrf
        <label>Broj 1</label>
        <input type="text" name="broj1"><br>

        <label>Broj 2</label>
        <input type="text" name="broj2"><br>
        <button type="submit">ZBROJI</button>


    </form>


</body>
</html>
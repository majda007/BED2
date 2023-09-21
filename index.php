
<!DOCTYPE html>

<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Authors and Books</title>
</head>
<body>
   
<form action="saveAuthor.php" method="POST">
Ime: <input type="text" pattern="[A-Za-z]+" name="ime" required ><br></br>
Prezime <input type="text"  pattern="[A-Za-z]+" name="prezime"required><br></br>
<input type="submit" name="Author" value="Send">
</form>

<form action="saveBook.php" method="POST">
Naslov Knjige: <input type="text" pattern="[A-Za-z]+" name="naslov" required><br></br>
ID Autora: <input type="text" name="id" pattern="[0-9]+" ><br></br>
Godina izdanja: <input type="year" name="godina" required><br></br>



<select name="autori">
    <option value="">Izaberi autora</option>
    <?php 
    include "singleton.php";
    $db = DB::getInstance();
        
      
    $mysqli = $db->getConnection(); 
    $query ="SELECT * FROM autori";
    $result = $mysqli->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['ime'];
    ?>
    
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
</select>
<br>
  












<input type="submit" name="Book" value="Send">
</form>






  











                </body>
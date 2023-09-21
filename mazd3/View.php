
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #5ceec2;
  
}

.button {
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 2px 0px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.buttonx {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.buttonx:hover {
  background-color: #008CBA;
  color: white;
}

</style>
    <meta charset="UTF-8">
  
</head>
<body>
    

<?php

    class View
    {
        public function traziRecept()
        {
            echo '
            <div
            style="position: absolute;
            top: 100px;
            left: 520px;
            transform: translate(-50%, -50%);
            padding: 10px;">
            <h2 style="opacity:0.7">OVJDE UNESITE RIJEČ ZA PRETRAGU RECEPATA</h2>
            <form action="index.php" method="POST">
            <p><label style="color:  #246187;font-weight: bold;">Ključna riječ: </label>
            <input type="text" name="naziv">
            <p><input style="position: relative; top: 2px; "class="button buttonx" type="submit" value="TRAŽI!">
            </div>
            ';
        }

        public function traziReceptNaziv($recept)
        {
            echo '
            <div
            style="position: absolute;
            top: 258px;
            left: 372px;
            transform: translate(-50%, -50%);
            padding: 10px;">
            <h2 style="opacity:0.7">OVDJE POTRAŽITE RECEPT</h2>
            <form action="index.php" method="POST">
            <p><label style="color:  #246187;font-weight: bold;">Naziv: </label>
            <select id="naziv" name="odaberi2">
            <option value="PRAZNO">PRAZNO</option>';
            foreach ($recept as $r)
            {
                echo '
                    <option value='.$r["naziv"].'>'.$r["naziv"].'</option>
                    ';
            }
            echo '
            </select>
            <p style="position: relative; top: 5px;"><input style="position: relative; top: 2px; "class="button buttonx" type="submit"  name="odaberi" value="ODABERI!">
            </div>
            ';
        }

        public function unesiRecept()
        {
            echo '
            <div
            style="position: absolute;
            top: 150px;
            left: 1350px;
            transform: translate(-50%, -50%);
            padding: 10px;">
            <h2 style="opacity:0.7">OVDJE UNESITE SVOJ RECEPT</h2>
            <form action="index.php" method="POST">
            <p><label style="color:  #246187;font-weight: bold;">Naziv recepta: </label>
            <input type="text" name="noviNaziv">
            <p><label style="color:  #246187;font-weight: bold;">Opis recepta: </label>
            <input type="text" name="opis">
            <p style="padding: 5px 0 0 0"><label style="color:  #246187;font-weight: bold;">Ocjena recepta: </label>
            <input type="number" name="ocjena" min="1" max="5">
            <p style="padding: 3px 0 0 0"><label for="datum" style="color:  #246187;font-weight: bold;">Odaberi datum:</label>
            <input type="date" id="datum" name="datum"> 
            <p><input type="submit" style="position: relative; top: 2px; "class="button buttonx" name="unesi" value="UNESI!">
            </div>
            ';
        }

        public function prikaziRecept($recept)
        {
            echo '
            foreach ($recept as $r)
            {
               
            
        
            <form action="index.php" method="POST">
            <p><label style="color:  #246187;font-weight: bold;">Naziv recepta: </label>
            <p><label style="color: blue">'.$r["naziv"].'</label>
            <p><label style="color:  #246187;font-weight: bold;">Opis recepta: </label>
            <p><label style="color: blue">'.$r["opis"].'</label>
            <p><label style="color:  #246187;font-weight: bold;">Ocjena recepta: </label>
            <p><label style="color: blue">'.$r["ocjena"].'</label>
            <p><label style="color:  #246187;font-weight: bold;">Datum recepta: </label>
            <p><label style="color: blue">'.$r["datum"].'</label>
            <br/>
            <br/>
            }
            ';
        
        }
        public function prikaziKomentar($komentar)
        {

          $file="test.xls";
            echo '
            <form action="index.php" method="POST">
            
            <div
            style="position: fixed;
            top: 480px;
            left: 1370px;
            transform: translate(-50%, -50%);
            padding: 10px;">
            $test=
            <table border="1">
                <tr>
                <th><div>ID: </div></th>
                <th><div>Naziv: </div></th>
                <th><div>Opis: </div></th>
                <th><div>Komentar: </div></th>
                <th><div>Ocjena: </div></th>
                <th><div>Datum: </div></th>
                </tr>';
                foreach ($komentar as $k)
                {
                  echo '
                <tr>
                <td><div><label style="color: black">'.$k["id"].'</div></td>
                <td><div><label style="color: black">'.$k["naziv"].'</div></td>
                <td><div><label style="color: black">'.$k["opis"].'</div></td>
                <td><div><label style="color: black">'.$k["komentar"].'</div></td>
                <td><div><label style="color: black">'.$k["ocjena"].'</div></td>
                <td><div><label style="color: black">'.$k["datum"].'</div></td>
                </tr>';
                }'
            </table>
            </div>';
        }
    }
    
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=$file");
    echo $test;
   
    
?>
</body>
</html>
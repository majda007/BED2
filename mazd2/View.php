<?php

    class View
    {
        public function traziRecept()
        {
            echo '
            <form action="index.php" method="POST">
            <p><label>Ključna riječ: </label>
            <input type="text" name="naziv">
            <p><input type="submit" value="TRAŽI!">
            <br/>
            <br/>
            ';
        }

        public function traziReceptNaziv($recept)
        {
            echo '
            <form action="index.php" method="POST">
            <p><label>Naziv: </label>
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
            <p><input type="submit" name="odaberi" value="ODABERI!">
            <br/>
            <br/>
            ';
        }

        public function unesiRecept()
        {
            echo '
            <form action="index.php" method="POST">
            <p><label>Naziv recepta: </label>
            <input type="text" name="noviNaziv">
            <p><label>Opis recepta: </label>
            <input type="text" name="opis">
            <p><label>Ocjena recepta: </label>
            <input type="number" name="ocjena" min="1" max="5">
            <p><label for="datum">Odaberi datum:</label>
            <input type="date" id="datum" name="datum"> 
            <p><input type="submit" name="unesi" value="UNESI!">
            <br/>
            <br/>
            ';
        }

        public function prikaziRecept($recept)
        {
            echo '
            <form action="index.php" method="POST">
            <p><label>Naziv recepta: </label>
            <p><label style="color: blue">'.$recept["naziv"].'</label>
            <p><label>Opis recepta: </label>
            <p><label style="color: blue">'.$recept["opis"].'</label>
            <p><label>Ocjena recepta: </label>
            <p><label style="color: blue">'.$recept["ocjena"].'</label>
            <p><label>Datum recepta: </label>
            <p><label style="color: blue">'.$recept["datum"].'</label>
            <br/>
            <br/>
            ';
        }
        public function prikaziKomentar($recept, $komentar)
        {
            
            echo '
            <form action="index.php" method="POST">
           
            <table border="1">
                <tr>
                <td><div>ID: </div></td>
                <td><div>Naziv: </div></td>
                <td><div>Opis: </div></td>
                <td><div>Komentar: </div></td>
                <td><div>Ocjena: </div></td>
                <td><div>Datum: </div></td>
                </tr>
                <tr>
                <td><div><label style="color: blue">'.$recept["id"].'</div></td>
                <td><div><label style="color: blue">'.$recept["naziv"].'</div></td>
                <td><div><label style="color: blue">'.$recept["opis"].'</div></td>
                <td><div><label style="color: blue">'.$kmentar["komentar"].'</div></td>
                <td><div><label style="color: blue">'.$komentar["ocjena"].'</div></td>
                <td><div><label style="color: blue">'.$recept["datum"].'</div></td>
                </tr>
            </table>';/*
            <p><label>ID: </label>
            <p><label style="color: blue">'.$komentar["id"].'</label>
            <p><label>Naziv: </label>
            <p><label style="color: blue">'.$komentar["naziv"].'</label>
            <p><label>Komentar: </label>
            <p><label style="color: blue">'.$komentar["komentar"].'</label>
            <p><label>Ocjena: </label>
            <p><label style="color: blue">'.$komentar["ocjena"].'</label>
            </table>
            <br/>
            <br/>
            ';*/
        }
    }

?>
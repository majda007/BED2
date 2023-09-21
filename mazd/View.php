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

        public function unesiRecept()
        {
            echo '
            <form action="index.php" method="POST">
            <p><label>Naziv recepta: </label>
            <input type="text" name="noviNaziv">
            <p><label>Opis recepta: </label>
            <input type="text" name="opis">
            <p><label>Ocjena recepta: </label>
            <input type="number" name="ocjena">
            <p><input type="submit" value="UNESI!">
            <br/>
            <br/>
            ';
        }

        public function prikaziRecept($recept)
        {
            /*
            echo '
            <form action="index.php" method="POST">
            <p><label>Naziv recepta: </label>
            <p><label style="color: blue">'.$recept["naziv"].'</label>
            <p><label>Opis recepta: </label>
            <p><label style="color: blue">'.$recept["opis"].'</label>
            <p><label>Ocjena recepta: </label>
            <p><label style="color: blue">'.$recept["ocjena"].'</label>
            <br/>
            <br/>
            ';
            */
        }
        public function prikazikomentar($komentar)
        {
            
            echo '
            <form action="index.php" method="POST">
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
            ';
        }
    }

?>
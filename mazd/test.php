
<?php
echo '
            <form action="index.php" method="POST">
            <table>
            
            <p><tr><label>ID: </label>
            <p><td><label style="color: blue">'.$komentar["id"].'</label></td></tr>
            <p><tr><label>Naziv: </label>
            <p><td><label style="color: blue">'.$komentar["naziv"].'</label></td></tr>
            <p><tr><label>Komentar: </label>
            <p><td><label style="color: blue">'.$komentar["komentar"].'</label></td></tr>
            <p><tr><label>Ocjena: </label>
            <p><td><label style="color: blue">'.$komentar["ocjena"].'</label></td></tr>
            </table>
            <br/>
            <br/>
            ';

            ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mala knjizica recepata</title>
</head>
<body>

<?php
    
    require "autoload.php";
    
    $config=new Config("config.ini");
    $db=Database::getInstance($config);
    $conn=$db->getConnection();

    if ($conn)
    {
        echo '
        <div
        style="position: fixed;
        top: 770px;
        left: 1370px;
        transform: translate(-50%, -50%);
        padding: 10px;">
        <h2 style="color: green">USPJEŠNO SPAJANJE NA BAZU!</h2>
        </div>
        ';
    }
    else
    {
        echo '
        <div
        style="position: fixed;
        top: 770px;
        left: 1370px;
        transform: translate(-50%, -50%);
        padding: 10px;">
        <h2 style="color: red">NEUSPJEŠNO SPAJANJE NA BAZU!</h2>
        </div>
        ';
    }

    $view = new View();
    $model = new Model($conn);
    $controller = new Controller($model, $view);
    $view -> traziRecept();
    $view -> unesiRecept();

    $recept = $model -> dohvatiSvePodatke();
    $view -> traziReceptNaziv($recept);
    
    if (empty($_POST["naziv"]))
    {
        if ($_POST["odaberi2"] == "PRAZNO")
        {
            echo '
            <div
            style="position: absolute;
            top: 388px;
            left: 372px;
            transform: translate(-50%, -50%);
            padding: 10px;">
            <h2>PRAZNO JE SVE &#127860;</h2>';
        }
        else
        {
            $naziv = $_POST["odaberi2"];
            $opis = $_POST["opis"];
            $ocjena = $_POST["ocjena"];
            $datum = $_POST["datum"];
            $recept = $model -> receptPostoji($naziv);
            $komentar = $model -> komentar($nesto, $recept[0]["naziv"]);
            if ($recept && $komentar)
            {
                $view -> prikaziKomentar($komentar);
            }
        }
    }
    else
    {
        if ($_POST["odaberi2"] == "PRAZNO")
        {
            $naziv = $_POST["naziv"];
            $opis = $_POST["opis"];
            $ocjena = $_POST["ocjena"];
            $datum = $_POST["datum"];
            $recept = $model -> receptPostoji($naziv);
            $komentar = $model -> komentar($nesto, $recept[0]["naziv"]);
            if ($recept && $komentar)
            {
                $view -> prikaziKomentar($komentar);
            }
        }
        else
        {
            $naziv = $_POST["odaberi2"];
            $opis = $_POST["opis"];
            $ocjena = $_POST["ocjena"];
            $datum = $_POST["datum"];
            $recept = $model -> receptPostoji($naziv);
            $komentar = $model -> komentar($nesto, $recept[0]["naziv"]);
            if ($recept && $komentar)
            {
                $view -> prikaziKomentar($komentar);
            }
        }

    }
    
    if (isset($_POST["unesi"]))
    {
        $naziv = $_POST["noviNaziv"];
        $opis = $_POST["opis"];
        $ocjena = $_POST["ocjena"];
        $datum=$_POST["datum"];
        //$datum = $_POST["datum"];
        echo $datum;
        //$datum = date_create()->format('Y-m-d H:i:s');
        //$datum=date("Y-m-d",strtotime($datum));
        //$datum= date('YYYYmmdd');
        //$datum = date('Y-m-d');
        //$datum = "'".date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['datum'])))."'";
        echo $datum;
        $controller -> dodajRecept($naziv, $opis, $ocjena, $datum);
        //$controller -> prikazRecepta($naziv);
    }
?>

</body>
</html>

<style>
    html { 
        background: url("./notebook.jpeg") no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
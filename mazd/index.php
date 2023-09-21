<?php

    include_once "./Database.php";
    include_once "./Model.php";
    include_once "./View.php";
    include_once "./Controller.php";
    
    $database = new Database($host, $dbName, $username, $password);
    $db = $database -> connect();
    $view = new View();
    $model = new Model($db);
    $controller = new Controller($model, $view);
    $view -> traziRecept();
    $view -> unesiRecept();
    $model->prikaziSvePodatke();
    if (isset($_POST["naziv"]))
    {
        $naziv = $_POST["naziv"];
        $opis = $_POST["opis"];
        $ocjena = $_POST["ocjena"];
        
        $recept = $model -> receptPostoji($naziv);
        $komentar=$model->komentar($nesto);
        if ($recept)
        {
            foreach ($recept as $r)
            {
               // $view -> prikaziRecept($r);
            }
        
      
    }

        if ($komentar && $recept)
        {
            foreach ($komentar as $k)
            {
                $view -> prikazikomentar($k);
            }
        /*}
        elseif ($recept == false)
        {*/
            //$view -> unesiRecept();
        }
    }

    if (isset($_POST["noviNaziv"]) && isset($_POST["opis"]) && isset($_POST["ocjena"]))
    {
        $naziv = $_POST["noviNaziv"];
        $controller -> dodajRecept($naziv, $opis, $ocjena);
        //$controller -> prikazRecepta($naziv);
        $controller -> prikazkomentara($nesto);
    }
   
?>
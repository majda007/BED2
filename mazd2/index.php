<?php
    
    require "autoload.php";
    //include_once "./Database.php";
    //include_once "./Model.php";
    //include_once "./View.php";
    //include_once "./Controller.php";
    
    $config=new Config("config.ini");
    $db=Database::getInstance($config);
    $conn=$db->getConnection();

   

    if ($conn)
    {
        echo "Uspješno spajanje na bazu";
    }
    else
    {
        echo "Spoj nije uspio";
    }
   // $database = new Database($host, $dbName, $username, $password);
    //$conn = $db-> connect();
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
            echo "PRAZNO SVE!";
        }
        else
        {
            
            $naziv = $_POST["odaberi2"];
            $opis = $_POST["opis"];
            $ocjena = $_POST["ocjena"];
            $datum = $_POST["datum"];
            $recept = $model -> receptPostoji($naziv);
            $komentar = $model -> komentar($nesto);
            if ($recept && $komentar)
            {
                foreach ($recept as $r)
                {
                    $rec[] = $r;
                    
                    foreach ($komentar as $k)
                    {
                        $kom[] = $k;
                    }
                $view -> prikaziKomentar($r, $k);
                }
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
            $komentar = $model -> komentar($nesto);
            if ($recept && $komentar)
            {
                foreach ($recept as $r)
                {
                    $rec[] = $r;
                    foreach ($komentar as $k)
                    {
                        $kom[] = $k;
                    }
                $view -> prikaziKomentar($r, $k);
                }
            }
        }
        else
        {
            $naziv = $_POST["odaberi2"];
            $opis = $_POST["opis"];
            $ocjena = $_POST["ocjena"];
            $datum = $_POST["datum"];
            $recept = $model -> receptPostoji($naziv);
            $komentar = $model -> komentar($nesto);
            if ($recept && $komentar)
            {
                foreach ($recept as $r)
                {
                    $rec[] = $r;
                    foreach ($komentar as $k)
                    {
                        $kom[] = $k;
                    }
                $view -> prikaziKomentar($r, $k);
                }
            }
    
        }

    }
    /*if (isset($_POST["odaberi2"]) == "PRAZNO" && isset($_POST["naziv"]))
    {
        //echo $_POST["odaberi2"];
        //if ((isset($_POST["naziv"])) || (isset($_POST["odaberi"])))
        //{
            $naziv = $_POST["naziv"];
            $opis = $_POST["opis"];
            $ocjena = $_POST["ocjena"];
            
            $recept = $model -> receptPostoji($naziv);
            $komentar = $model -> komentar($nesto);
            if ($recept && $komentar)
            {
                foreach ($recept as $r)
                {
                    $rec[] = $r;
                    foreach ($komentar as $k)
                    {
                        $kom[] = $k;
                    }
                $view -> prikaziKomentar($r, $k);
                }
            }
        //}
    }
    //if (isset($_POST["odaberi2"]) != "PRAZNO" && empty($_POST["naziv"]))
    if (empty($_POST["naziv"]) && isset($_POST["odaberi2"]))
    {
        echo $_POST["naziv"];
        echo $_POST["odaberi2"];
        $naziv = $_POST["odaberi2"];
        $opis = $_POST["opis"];
        $ocjena = $_POST["ocjena"];
        
        $recept = $model -> receptPostoji($naziv);
        $komentar = $model -> komentar($nesto);
        if ($recept && $komentar)
        {
            foreach ($recept as $r)
            {
                $rec[] = $r;
                foreach ($komentar as $k)
                {
                    $kom[] = $k;
                }
            $view -> prikaziKomentar($r, $k);
            }
        }

    }


   
        
    /*if (isset($_POST["naziv"]))
    {
        $naziv = $_POST["naziv"];
        $opis = $_POST["opis"];
        $ocjena = $_POST["ocjena"];
        
        $recept = $model -> receptPostoji($naziv);
        $komentar = $model -> komentar($nesto);
        if ($recept && $komentar)
        {
            foreach ($recept as $r)
            {
                $rec[] = $r;
                foreach ($komentar as $k)
                {
                    $kom[] = $k;
                }
               $view -> prikaziKomentar($r, $k);
            }
        
      
        }

    }*/
    
   if (isset($_POST["unesi"]))
    //if (isset($_POST["noviNaziv"]) && isset($_POST["opis"]) && isset($_POST["ocjena"]))
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
            $datum = date('Y-m-d');
            //$datum = "'".date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['datum'])))."'";
echo $datum;
        $controller -> dodajRecept($naziv, $opis, $ocjena, $datum);
        //$controller -> prikazRecepta($naziv);
    }
?>
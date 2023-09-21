<?php
require "autoload.php";
    //include_once "./Model.php";
    //include_once "./View.php";

    class Controller
    {
        private $model;
        private $view;

        public function __construct($model, $view)
        {
            $this -> model = $model;
            $this -> view = $view;
        }

        public function prikaziSvePodatke()
        {
            $recept = $this -> model -> dohvatiSvePodatke() -> fetchAll(PDO::FETCH_ASSOC);
            $this -> view -> prikaziRecept($recept);
           
        }

        public function prikazRecepta($naziv)
        {
            $recept = $this -> model -> receptPostoji($naziv);
            $this -> view -> prikaziRecept($recept);
        }
        public function prikazKomentara($nesto)
        {
            $komentar= $this -> model -> komentar($nesto);
            $this -> view -> prikaziKomentar($komentar);
        }
        public function dodajRecept($naziv, $opis, $ocjena, $datum)
        {
            $this -> model -> naziv = $naziv;
            $this -> model -> opis = $opis;
            $this -> model -> ocjena = $ocjena;
            $this -> model -> datum = $datum;
            $this -> model -> dodajRecept();
        }
    }

?>
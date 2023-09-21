<?php
    
    include_once "./Database.php";
    
    class Model
    {
        private $conn;
        private $table = "recept";
        public $id;
        public $naziv;
        //public $noviNaziv;
        public $opis;
        public $ocjena;
        public $nesto;
        public $komentar;
        public $datum;
        
      
        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function dohvatiSvePodatke()
        {
            $query = "SELECT * FROM ".$this -> table;
            $stmt = $this -> conn -> prepare($query);
            $stmt -> execute();
            $recept = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $recept;
        }

        public function receptPostoji($naziv)
        {
            $query = "SELECT * FROM ".$this -> table." WHERE naziv LIKE '%$naziv%'";
            $stmt = $this -> conn -> prepare($query);
            //$stmt -> bindParam(1, $naziv);
            $stmt -> execute();
            $recept = $stmt -> fetchAll(PDO::FETCH_ASSOC);
           
            if ($stmt -> rowCount() > 0)
            {
                
                return $recept;
            }
            else
            {
                return false;
            }
        }
        public function komentar($nesto, $naziv3)
        {
            $query = "SELECT recept.id, recept.naziv, recept.opis, recept.ocjena, recept.datum, ocjene.komentar FROM recept LEFT JOIN ocjene ON ocjene.id=recept.ocjena WHERE recept.naziv=:naziv3";
            $stmt = $this -> conn -> prepare($query);
            $stmt -> bindParam(":naziv3", $naziv3);
            $stmt -> execute();
            $komentar = $stmt -> fetchAll(PDO::FETCH_ASSOC);
           
            if ($stmt -> rowCount() > 0)
            {
                
                return $komentar;
            }
            else
            {
                return false;
            }
        }
        public function dodajRecept()
        {
                $query = "INSERT INTO ".$this -> table." (naziv, opis, ocjena, datum) VALUES (:naziv, :opis, :ocjena, :datum )";
                $stmt = $this -> conn -> prepare($query);
                $this -> naziv = htmlspecialchars(strip_tags($this -> naziv));
                $this -> opis = htmlspecialchars(strip_tags($this -> opis));
                $this -> ocjena = htmlspecialchars(strip_tags($this -> ocjena));
                $this -> datum = htmlspecialchars(strip_tags($this -> datum));
                $stmt -> bindParam(":naziv", $this -> naziv);
                $stmt -> bindParam(":opis", $this -> opis);
                $stmt -> bindParam(":ocjena", $this -> ocjena);
                $stmt -> bindParam(":datum", $this -> datum);
        
                if ($stmt -> execute())
                {
                    echo "<p><label style='color: green'>USPJEŠAN unos u bazu!";
                }  
                else
                {
                    echo "<p><label style='color: red'>NEUSPJEŠAN unos u bazu!";
                }
        }
    }

?>
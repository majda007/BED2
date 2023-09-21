<?php

    class Database
    {
        private $host = "localhost";
        private $dbName = "recepti";
        private $username = "root";
        private $password = "majda123";
        private $conn;

        public function connect()
        {
            $this -> conn = null;
            try
            {
                $this -> conn = new PDO("mysql:host=".$this -> host."; dbname=".$this -> dbName, $this -> username, $this -> password);
                $this -> conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e)
            {
                echo "Connection error: ".$e -> getMessage();
            }
            //echo "aaa";
            return $this -> conn;
        }
    }
    
?>
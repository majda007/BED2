<?php
$servername = "localhost";
$username = "root";
$password = "majda123";
$dbname = "recepti";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "create table recept( id int auto_increment primary key, naziv varchar (150), opis varchar (255), datum date) engine=InnoDB;";

if ($conn->query($sql) === TRUE) {
  echo "Table recept created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 

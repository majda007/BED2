<?php
$servername = "localhost";
$username = "root";
$password = "majda123";
$dbname = "biblioteka";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "create table autori2 ( id int auto_increment primary key, ime varchar (70), prezime varchar (90)) engine=InnoDB;";

if ($conn->query($sql) === TRUE) {
  echo "Table autori2 created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
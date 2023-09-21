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
$sql = "create table ocjene ( id int primary key, naziv varchar(150) not null,  komentar varchar(255));";

if ($conn->query($sql) === TRUE) {
  echo "Table ocjene created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 

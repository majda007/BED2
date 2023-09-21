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
$sql = "create table knjige2 ( id int auto_increment primary key, naslov varchar
(100) not null, godina_izdanja year, id_autori int, foreign key(id_autori) references autori(id) on update cascade  on delete restrict );";

if ($conn->query($sql) === TRUE) {
  echo "Table knjige2 created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
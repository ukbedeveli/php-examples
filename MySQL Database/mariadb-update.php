<?php
$servername = "db";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully ";

//connect using database 
$sql = "USE myDB;";
if ($conn->query($sql) === TRUE) {
  echo " use myDB successfully ";
} else {
  echo " Error connection db:  " . $conn->error;
}

// UPDATE data
$sql = "UPDATE MyGuests SET lastname='Moe' WHERE id=4";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
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

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully ";
} else {
  echo "Error deleting record:"  . $conn->error;
}

$conn->close();
?>
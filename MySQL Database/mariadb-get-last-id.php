<?php
$servername = "db";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die(" Connection failed: " . $conn->connect_error);
}
echo " Connected successfully ";

//connect using database 
$sql = " USE myDB; ";
if ($conn->query($sql) === TRUE) {
  echo " use myDB successfully ";
} else {
  echo "Error connection db: " . $conn->error;
}

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo " New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
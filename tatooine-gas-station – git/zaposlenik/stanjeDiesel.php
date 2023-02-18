<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="benzinska";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT kolicinaGoriva FROM GORIVO WHERE gorivoID=2 ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = $result->fetch_array()) {
        print $row["kolicinaGoriva"].'L /20000L';
    }
  } else {
    echo "0 results";
  }
  

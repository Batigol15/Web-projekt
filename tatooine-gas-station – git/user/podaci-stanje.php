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
echo "Connected successfully";

$sql = "SELECT kolicinaGoriva FROM GORIVO";

$result = $conn->query($sql);
while($row=$result->fetch_array()){
    print $row['kolicinaGoriva'] . ' ' .'<br>';
}
$result->close();
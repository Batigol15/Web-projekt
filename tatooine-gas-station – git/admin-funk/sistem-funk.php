
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="benzinska";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$unixTime=time();
$date = date('Y-m-d H:i:s');

function dnevnikIzmjena($conn,$operation,$description,$unixTime,$date,$userName){
    $userName = $_COOKIE['userName'];
    $sql = "INSERT INTO IZMJENE (radnja, opis, unixTime, date, userName)
    VALUES ('$operation','$description','$unixTime','$date','$userName'); ";
    $conn->query($sql);
}

// function updateStatus($conn,$status){
//   $sql = " SELECT * FROM USERS WHERE isActive='$status' ";
//   $result = mysqli_query($conn, $sql);
// }

function getCookie($conn){
  $sql = "SELECT * FROM KONFIGURACIJA WHERE name='Cookie time'";
  $result = mysqli_query($conn, $sql);

  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $cookietime = $row['value'];
      $cookietime_sec = $cookietime * 86400;

    }
    return $cookietime_sec;
  }
}

function getPages($conn){
  $sql = "SELECT * FROM KONFIGURACIJA WHERE name='Pages'";
  $result = mysqli_query($conn, $sql);

  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $pages = $row['value'];
      

    }
    return $pages;
  }
}

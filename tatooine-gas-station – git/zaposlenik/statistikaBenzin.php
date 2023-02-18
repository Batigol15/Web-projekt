<?php

require_once '../funkcije/spajanjebaza.php';

$sql = "SELECT prodanoGoriva FROM GORIVO WHERE gorivoID=1 ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["prodanoGoriva"];
    }
  } else {
    echo "0 results";
  }
  

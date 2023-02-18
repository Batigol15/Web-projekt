<?php    /////////////////////////////////////////////NE KORISTIM //////////////////////////////////////////////////////

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



$sql = " SELECT * FROM USERS ";
$result = $conn->query($sql);
//$connect = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$num = mysqli_num_rows($result);

while ($data = mysqli_fetch_assoc($result)) {
    // print '<br>Broj racuna:'.$row['racunID'].'   Datum:'.$row['datum'].'     Tip goriva:'.$row['gorivo'].'     Iznos:'.$row['iznos'].'kn     Kolicina:'.$row['kolicina'].'l     Zaposlenik:'.$row['zaposlenik'].'<br><hr>'; 
    echo "
    <tr>
    <td>" . $data['userID'] . "</td>
    <td>" . $data['realName'] . "</td>  
    <td>" . $data['realSurname'] . "</td>
    <td>" . $data['userName'] . "</td>
    <td>" . $data['userEmail'] . "</td>  
    <td>" . $data['userPassword'] . "</td>
    <td>" . $data['isActive'] . "</td>
    <td>" . $data['isLocked'] . "</td> 
    <td>" . $data['activationCode'] . "</td>
    <td>" . $data['datum'] . "</td>
    <td><a href= </td>
    </tr>
    ";
}    
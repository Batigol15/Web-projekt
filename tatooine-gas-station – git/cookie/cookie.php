<?php  
$userName = $_POST['username'] ?? $_COOKIE['userName'] ?? '';
$userPassword =$_POST['userpassword'] ?? $_COOKIE['userPassword'] ?? '';        // PRIMJER SA VJEZBI OD PROFESORA
$message = '';

include '../funkcije/spajanjebaza.php';

$sql = "SELECT * FROM USERS WHERE userName = '$userName' AND userPassword = '$userPassword';";  
$result = $conn->query($sql);
//$result = mysqli_query($conn, $sql);
$result2 = mysqli_fetch_array($result);


if ($result->num_rows > 0)          
{
    
    $message = "Sustav koristi, " . $result2['userName']. " ";
}
 
else {

    header('Location: ../login.php');
    
    exit();
}
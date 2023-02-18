<?php
// DIO VEZAN ZA SIGN UP   ... KADA IMAMO KRIV UNOS ZA USERNAME / EMAIL I NAME (nedovoljan broj charachtera)
function kriviSignup($realName,$realSurname,$userName, $userEmail, $userPassword ){
  $result=null;

  if(empty ($realName) || empty ($realSurname) || empty($userName) || strlen($realName<=2) || strlen($realSurname<=2) || empty($userEmail) || empty($userPassword)){
    $result=true;
  }
  else{
    $result=false;
  }
  return $result;

}
function kriviEmail($userEmail){
  $result = null;
  if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
      $result = true;
  }
  else{
      $result = false;
  }
  return $result;
}
// NASTAVAK SIGN UPA ALI KAD JE USERNAME VEC ZAUZET
function istiUsername($conn, $userName){
  $sql= "SELECT * FROM USERS WHERE username = ?;";
  $statement=mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($statement, $sql)){
    header("location: ../signup.php?error=statementfailed");
    exit();
  }

  mysqli_stmt_bind_param($statement, "s", $userName);
  mysqli_stmt_execute($statement);

  $result=mysqli_stmt_get_result($statement);

  if($row=mysqli_fetch_assoc($result)){
    return $row;
  }else{
    $result=false;
    return $result;
  }
}
// funkcija kad u bazi vec imamo taj email
function istiEmail($conn,$userEmail){
  $sql= "SELECT * FROM USERS WHERE useremail= '$userEmail'";
  $result1= $conn -> query ($sql); 

  if ( mysqli_num_rows($result1)>0){
    
    $result=true;
  }
  else{

    $result=false;
  }
  return $result;
}

function kreirajUsera($conn, $realName, $realSurname, $userName, $userEmail, $userPassword, $isActive, $isLocked, $activationCode, $date, $badLogin){
  $sql="INSERT INTO USERS ( realName ,realSurname, userName, userEmail, userPassword, isActive, isLocked, activationCode, datum, badLogin) VALUES (?,?,?,?,?,?,?,?,?,?);";
  $statement=mysqli_stmt_init($conn);
  

  if(!mysqli_stmt_prepare($statement, $sql)){
    header("location: ../signup.php?error=statementfailed");
    exit();
  }
  
  $hashPassword= password_hash($userPassword, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($statement, "ssssssssss",$realName, $realSurname, $userName, $userEmail,$hashPassword,$isActive, $isLocked, $activationCode,$date, $badLogin); 
  mysqli_stmt_execute($statement);
  mysqli_stmt_close($statement);
  include '../PHPMailer-6.7.1/src/send.php';
  header("location: ../activation.php?error=none");
  exit();
  
}
// funkcije za aktivaciju racuna

function aktivirajAccount($conn,$userEmail,$activationCode){

  $sql="SELECT * FROM USERS WHERE userEmail = '$userEmail' AND  activationCode='$activationCode';";
  $result1=$conn->query($sql);

  if  (mysqli_num_rows($result1)>0){

    $sql="UPDATE USERS SET isActive='active' WHERE userEmail= '$userEmail' AND  activationCode='$activationCode';";
    $conn->query($sql);
    $result=false;
  }
  else{
    $result=true;
  }
  return $result;
}
function jeAktivan($conn, $userEmail){
  $sql="SELECT * FROM USERS WHERE userEmail = '$userEmail' AND isActive='active';";
  $result1=$conn->query($sql);

  if  (mysqli_num_rows($result1)>0){

    $result=true;
  }
  else{
    $result=false;
  }
  return $result;
}

///// funkcije vezane za login////

function kriviLogin($userName, $userPassword){
  $result = null;
  if(empty($userName) || empty($userPassword)){
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;

}

function jeZakljucan($conn, $userName)
{
  $sql="SELECT * FROM USERS WHERE userName = '$userName' AND isLocked='locked';";
  $result1=$conn->query($sql);

  if  (mysqli_num_rows($result1)>0){

    $result=true;
  }
  else{
    $result=false;
  }
  return $result;
}

function loginUser($conn, $userName, $userPassword){

  $istiUsername1 = istiUsername($conn, $userName);

  if ($istiUsername1 === false) {
    header("location: ../login.php?error=usernamedoesnotexist");
    exit();
  }

  if ($istiUsername1["isActive"] !=='active') {
    header("location: ../login.php?error=accountnotacctive");
    exit();
  }

  if (checkBadLogin($conn, $userName) !== false) {
    zakljucajRacun($conn, $userName);

    header("location: ../login.php?error=accountlocked");
    exit();
  }

  $hashPassword = $istiUsername1["userPassword"];
  $provjeriPassword = password_verify($userPassword, $hashPassword);

  if ($provjeriPassword === true && $istiUsername1["userName"]=='Administrator') {

    include '../admin-funk/sistem-funk.php';
    setcookie(
      'userName',
      $userName,
      (time() + getCookie($conn)),
      '/'

    );

    setcookie(
      'userPassword',
      $hashPassword,
      (time() + getCookie($conn)),
      '/'
    );

    header('location: ../admin/admin-index.php');
    exit();
  }

  if ($provjeriPassword === true && $istiUsername1["userName"]==$userName) {

    include '../admin-funk/sistem-funk.php';
    setcookie(
      'userName',
      $userName,
      (time() + getCookie($conn)),
      '/'

    );

    setcookie(
      'userPassword',
      $hashPassword,
      (time() + getCookie($conn)),
      '/'
    );

    header('location: ../user/user-index.php');
    exit();
  }
  if ($provjeriPassword === false) {
    badLogin($conn, $userName);
    header("location: ../login.php?error=invalidlogin");
    exit();
  }
}

function badLogin($conn, $userName)
{
  $sql_get = "SELECT * FROM USERS WHERE userName = '$userName'";
  $result1 = mysqli_query($conn, $sql_get);

  if ($result1) {
    while ($row = mysqli_fetch_assoc($result1)) {
      $getBadLoginNumber = $row['badLogin'];
    }
  }
  $updateBadLogin = $getBadLoginNumber + 1;

  $sql_update = "UPDATE USERS SET badLogin = '$updateBadLogin' WHERE userName = '$userName';";
  mysqli_query($conn, $sql_update); 
}

function checkBadLogin($conn, $userName)
{
  $sql_get = "SELECT * FROM USERS WHERE userName = '$userName'";
  $result1 = mysqli_query($conn, $sql_get);

  if ($result1) {
    while ($row = mysqli_fetch_assoc($result1)) {
      $getBadLoginNumber = $row['badLogin'];
    }
  }

  if ($getBadLoginNumber >= 4) {
    $result = true;
  } 
  else
    $result = false;

  return $result;
}

function zakljucajRacun($conn, $userName){
  $sql2 = "UPDATE USERS SET isLocked='locked' WHERE userName='$userName'";
  mysqli_query($conn, $sql2);
}
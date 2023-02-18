<?php

if(isset($_POST["submit"])){
  
  $realName=$_POST["realname"];
  $realSurname=$_POST["realsurname"];
  $userName=$_POST["username"];
  $userEmail=$_POST["useremail"];
  $userPassword=$_POST["userpassword"];
  $isActive='not_active';
  $isLocked = 'not_locked';
  $activationCode=random_int(1000,9999);
  $date = date('Y-m-d H:i:s');

  require_once 'spajanjebaza.php';
  require_once 'funkcije.funk.php';

  if (kriviSignup($realName, $realSurname, $userName, $userEmail, $userPassword) !== false){
    header("location: ../signup.php?error=badinput");
    exit();
  }

  if (kriviEmail($userEmail) !== false){
    header("location: ../signup.php?error=invalidemail");
    exit();
  }

  if (istiUsername($conn, $userName) !== false){
    header("location: ../signup.php?error=usernameexists");
    exit();
  }

  if (istiEmail($conn,$userEmail) !== false){
    header("location: ../signup.php?error=emailexists");
    exit();

  }

  kreirajUsera( $conn, $realName, $realSurname, $userName, $userEmail, $userPassword, $isActive, $isLocked, $activationCode, $date, 0);

}
else{
  header("location: ../signup.php");
  exit();
}

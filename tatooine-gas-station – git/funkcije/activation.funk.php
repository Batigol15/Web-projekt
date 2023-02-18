<?php

if(isset($_POST["submit"])){
  
  $userEmail=$_POST["useremail"];
  $activationCode=$_POST["activationcode"];


  require_once 'spajanjebaza.php';
  require_once 'funkcije.funk.php';


  if (kriviEmail($userEmail) !== false){
    header("location: ../activation.php?error=invalidemail");
    exit();
  }

  if (jeAktivan($conn, $userEmail) !== false){
    header("location: ../activation.php?error=thataccountisactive");
    exit();
  }

  if (aktivirajAccount($conn,$userEmail,$activationCode) !== false){
    header("location: ../activation.php?error=codeoremailnotvaild");
    exit();

  }
  else{
    header("location: ../activation.php?error=none");
    exit();

  }

}

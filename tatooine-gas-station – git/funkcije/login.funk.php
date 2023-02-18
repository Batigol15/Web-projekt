<?php

if (isset($_POST["submit"])) {

    $userName = $_POST["username"];
    $userPassword = $_POST["userpassword"];


    $recaptcha = $_POST["g-recaptcha-response"];
    $secretkey = '6LfAoLgjAAAAAK_QUK8RLODZftSiEarEoaiwhMX-';
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretkey . '&response=' . $recaptcha;
    $response = file_get_contents($url);
    $responsedata = json_decode($response);

    require_once 'spajanjebaza.php';
    require_once 'funkcije.funk.php';

    if (kriviLogin($userName,$userPassword) !== false ){
        header("location: ../login.php?error=badinput");
        exit();
    } 

    if(jeZakljucan($conn, $userName) !== false){
        header("location: ../login.php?error=accountlocked");
        exit();
    }
    
    
    elseif ($responsedata -> success !=true) {

        header("location: ../login.php?error=invalidcaptchainput");
        exit();
    }


    loginUser($conn, $userName, $userPassword);
    
    

}
else{
    header("location: ../login.php");
    exit();
}

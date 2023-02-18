<?php

if (isset($_POST["logout"])) {
    setcookie('userName', "", time() - 100,'/');
    setcookie('userPassword',"", time() - 100,'/');

    header('location: ../login.php');
    exit();

}
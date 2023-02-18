<?php
if ($_SERVER['SERVER_PROTOCOL']='http'){    // implementiran dio koji je profesor pokazao na satu. Iako se mi spajamo preko localhosta (nece radit)
    header('../login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./login-signup.css">
        <title><?php print $naslov; ?></title>
        <script src="./JS/ajax.js"></script>
        <script src="./JS/jquery-3.6.2.min.js"></script>
        <script src="./JS/signup.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </head>
    <body>
        <div class="gridContainer">
            
            <div class="headerContainer">
                <div class="logo">
                    <img id="slika" src="slike/logo.jpg" width="150" height="150">
                     <p id="a">Tatooine gas station </p>
                </div>
            </div>  
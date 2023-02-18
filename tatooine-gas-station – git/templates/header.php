
<?php
if ($_SERVER['SERVER_PROTOCOL']='http'){
    header('../login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title><?php print $naslov; ?></title>

    </head>
    <body>
        <div class="gridContainer">
            <div class="headerContainer">
                <div class="logo">
                    <img id="slika" src="slike/logo.jpg" width="150" height="150">
                     <p id="a">Tatooine Gas Station </p>
                </div>
                
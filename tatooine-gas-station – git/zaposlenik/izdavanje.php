<?php

include '../funkcije/spajanjebaza.php';
include '../admin-funk/sistem-funk.php';

if (isset($_POST['submit'])) {

    //$unosKolicine = $_POST['unosKolicine'] ?? '';
    $unosKolicine = intval($_POST['unosKolicine'] ?? 0);
    $tipGoriva = $_POST['tipGoriva'] ?? '';
    $datum = date('Y-m-d_H-i-s');
   // $zaposlenik = $_POST['zaposlenik'] ?? '';
    $zaposlenik = $_COOKIE['userName'];     // racun mi izadaje zaposlenik koji je logiran

    if($odabirGoriva='Benzin'){
        $cijena = 9.65;
    }
    if($odabirGoriva='Diesel'){
        $cijena = 8.78;
    }



    $sql = "SELECT * FROM GORIVO WHERE tipGoriva = '$tipGoriva'";
    $result2 = mysqli_query($conn, $sql);

    while ($rows = mysqli_fetch_assoc($result2)) {
        $tipGoriva = $rows['tipGoriva'];
        // $cijena = $rows['cijena'];
        $kolicinaGoriva = $rows['kolicinaGoriva'];
        $prodanoGoriva = $rows['prodanoGoriva'];

    }

    $kolicinaGorivaUpdate = $kolicinaGoriva - $unosKolicine;
    $prodanoGorivaUpdate = $prodanoGoriva + $unosKolicine;


	if ($unosKolicine<5 ){
		header("Location: ../user/izdavanjeracuna.php?error=inssuficientfuelinput");
		exit();
    }
	if ($unosKolicine>$kolicinaGoriva){
		header("Location: ../user/izdavanjeracuna.php?error=insufficientfuelintank");
		exit();
	}
    if (empty($unosKolicine)){
		header("Location: ../user/izdavanjeracuna.php?error=emptyfuelinput");
		exit();
	}
    if (empty($zaposlenik)){
		header("Location: ../user/izdavanjeracuna.php?error=emptyzaposlenikinput");
		exit();
	}

    $cijena1 = $cijena * $unosKolicine;
    $sql2 = "INSERT INTO RACUNI (datum, gorivo, kolicina, iznos, zaposlenik)
    VALUES ('$datum', '$tipGoriva', '$unosKolicine', '$cijena1', '$zaposlenik')";
    $operation = "Unos u RACUNI";
    $description = "Izdan racun ";
    dnevnikIzmjena($conn, $operation, $description, $unixTime, $date, $userName);

    $sql3 = " UPDATE GORIVO SET kolicinaGoriva ='$kolicinaGorivaUpdate' WHERE tipGoriva='$tipGoriva' ";
    $sql4 = " UPDATE GORIVO SET prodanoGoriva ='$prodanoGorivaUpdate' WHERE tipGoriva='$tipGoriva' ";
    $operation1 = "Unos u GORIVO";
    $description1 = "Azurirano stanje prodanog goriva ";
    dnevnikIzmjena($conn, $operation1, $description1, $unixTime, $date, $userName);
    
    if(mysqli_query($conn, $sql2)){
       mysqli_query($conn, $sql3);
       mysqli_query($conn, $sql4);
        header("Location: ../user/izdavanjeracuna.php?error=none");
        exit();
    } 
    else{
        header("Location: ../user/izdavanjeracuna.php?error=updatefailed");
        exit();
    }
    
}
<?php


include '../funkcije/spajanjebaza.php';
include '../admin-funk/sistem-funk.php';

$unosKolicine = intval($_POST['unosKolicine'] ?? 0);
$odabirGoriva = $_POST['odabirGoriva'] ?? '';
$odabirGorivab = $_POST['odabirGorivab'] ?? '';

//var_dump($unosKolicine);

if(isset($_POST['submit'])) {

	$sql = "SELECT * FROM GORIVO WHERE gorivoID = '$odabirGoriva'";
	$result2 = mysqli_query($conn, $sql); 

	while($rows = mysqli_fetch_array($result2))
	{
    	//$tipGoriva =$rows['tipGoriva'];
		$kolicinaGoriva= $rows['kolicinaGoriva'];
	
	}

	$kolicinaGorivaUpdate = $kolicinaGoriva + $unosKolicine;


	 if ($kolicinaGorivaUpdate>20000){
	 	header("Location: ../user/azuriranje.php?error=largefuelinput");
	 	exit();
	}
	if ($unosKolicine<1000 ){
		header("Location: ../user/azuriranje.php?error=inssuficientfuelinput");
		exit();
	}
	if (empty($unosKolicine)){
		header("Location: ../user/azuriranje.php?error=emptyfuelinput");
		//exit();
	}
	
	$sql2 = "UPDATE GORIVO SET kolicinaGoriva='$kolicinaGorivaUpdate' WHERE gorivoID='$odabirGoriva';";
	$operation = "Unos u GORIVO";
    $description = "Evidentiran novi unos goriva u spremnik";
    dnevnikIzmjena($conn, $operation, $description, $unixTime, $date, $userName);
    
		if(mysqli_query($conn, $sql2)){
			header("Location: ../user/azuriranje.php?error=none");
			exit();
    	} 
		else{
	    	header("Location: ../user/azuriranje.php?error=updatefailed");
	    	exit();
    	}
	
} 

// if(isset($_POST['submitb'])) {

// 	$sql3 = "UPDATE  GORIVO SET kolicinaGoriva=0  WHERE gorivoID = '$odabirGorivab'";
// 	$result3 = mysqli_query($conn, $sql3); 

// 	while($rows = mysqli_fetch_array($result3))
// 	 {
//     	$tipGorivab =$rows['tipGoriva'];
// 	$kolicinaGoriva= $rows['kolicinaGoriva'];
	
// 	 }

	

	
// 	//$sql4 = "UPDATE GORIVO SET kolicinaGoriva='$kolicinaGorivaUpdate' WHERE gorivoID='$odabirGorivab';";
// 	$operation = "Brisanje u GORIVO";
//     $description = "Evidentirano brisanje goriva iz spremnika";
//     dnevnikIzmjena($conn, $operation, $description, $unixTime, $date, $userName);
    
// 		if(mysqli_query($conn, $sql4)){
// 			header("Location: ../user/azuriranje.php?error=none");
// 			exit();
//     	} 
// 		else{
// 	    	header("Location: ../user/azuriranje.php?error=updatefailed");
// 	    	exit();
//     	}
	
// } 
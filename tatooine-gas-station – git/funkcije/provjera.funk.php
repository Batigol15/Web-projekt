<?php

$conn=mysqli_connect("localhost", "root", "", "benzinska");   //za ajax

if (!empty($_POST["username"])){
  $query="SELECT * FROM USERS WHERE username='". $_POST ['username'] . "'";
  $result = mysqli_query($conn, $query);
  $count= mysqli_num_rows($result);

  if ($count>0){
    echo "<span style='color:red'> Korisnicko ime zauzeto!!!!</span>";
    echo "<script>$('#submit').prop('disabled' , true);</script>";
  }else{
    echo "<span style='color:green'> Korisnicko ime slobodno. Uspjesan unos</span>";
    echo "<script>$('#submit').prop('disabled' , false);</script>";
  }
}
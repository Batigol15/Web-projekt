
<?php $naslov = "Baza korisnika"; include('../templates/user-header.php'); ?>

<div id="menu">
    <div><a href="../admin/admin-useri.php" >Baza korisnika </a></div><hr>
</div>

</div>
<div class="contentContainer">
<h1><?=$message?></h1><br>
<h2 style="text-align: center;">Baza korisnika</h2>


<tr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="benzinska";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $name = $_GET['a'] ?? ''; //ode je falilo ?? '', jer inace izbacuje gresku!
    $sql=" SELECT * FROM USERS WHERE realName='$name' ";
    $result = mysqli_query($conn, $sql);

    ?>   
        <form action="" method="post">
        <table id="table" border="1px" align="center" style="background-color:black; font-size:12px ;">
      <?php  while($row=mysqli_fetch_assoc($result))
      { 
        ?>                        
                <tr>
                <td>Prezime: <?php echo $row['realSurname']; ?></td>  
                </tr>

                <tr>
                <td>Ime: <?php echo $row['realName']; ?></td>
                </tr>

                <tr>
                <td>Korisnicko ime: <?php echo $row['userName']; ?></td>  
                </tr> 

                <tr>
                <td><input type="hidden" name="nm" value=" <?php echo $row['realName']; ?>">
                    <!-- Status://<input type="text" name="status" value="
                    <?php
                    // echo $row['isActive']; 
                    ?> 
                    ">  --> 
                    <!-- OVO NE TRIBA -->


                    <select name="status" id="status">
                      <option selected hidden><?php echo $row['isActive']; ?></option>
                      <option value="active">Active</option>
                      <option value="not_active">Not active</option>
                    </select>

                    <select name="status_lock" id="status_lock">
                      <option selected hidden><?php echo $row['isLocked']; ?></option>
                      <option value="not_locked">Not locked</option>
                      <option value="locked">Locked</option>
                    </select>

                    <label for="broj">Broj krivih logiranja: </label>
                    <input type="text" name="broj_pokusaja" id="broj_pokusaja" value=" <?php echo $row['badLogin'];?>" style="width: 50px;"  readonly disabled>
                    
                    <br><br> PROMJENI U "active/not_active" </td>
                </tr>

                 
                <td>
                  <input type="submit" name="submit" value="Promijeni">
                  <input type="submit" name="submit_pokusaji" value="Resetiraj pokušaje">
                </td>
                </tr>       

      <?php  }?>                        

      </table>
      </form>
<?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="benzinska";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password,$dbname);
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $get_name = $_GET['a'] ?? '';

        if(isset($_POST['submit'])){
        $status = $_POST['status'];
        $status_lock = $_POST['status_lock'];

        //  $name = $_GET['a']; ovo je ode nepotrebno, tribalo je bit prije submita

        $sql1 = "UPDATE USERS SET isActive='$status' WHERE realName='$get_name'  ";
        $result = mysqli_query($conn, $sql1);
        
        $sql2 = "UPDATE USERS SET isLocked='$status_lock' WHERE realName='$get_name'  ";
        $result = mysqli_query($conn, $sql2);
        
        
        // header("Location: ../admin-funk/user-change.php?error=noerror-statuschanged"); MOZE REFRESH UMISTO OVOGA
        header("Refresh:0");
       

    }

    if (isset($_POST['submit_pokusaji'])) {

      $sql_pokusaji = "UPDATE USERS SET badLogin ='0' WHERE realName='$get_name'";
      mysqli_query($conn, $sql_pokusaji);

      header("Refresh:0");
      
    }

?>


</div>

<?php  include('../templates/footer.php') ?>
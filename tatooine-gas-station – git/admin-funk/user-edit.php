
<?php $naslov = "Baza korisnika"; include('../templates/user-header.php'); ?>

<div id="menu">
    <div><a href="../admin/admin-useri.php" >Baza korisnika </a></div><hr>
</div>

</div>
<div class="contentContainer">
<h1><?=$message?></h1><br>
<h2 style="text-align: center;">Baza korisnika</h2>

<form action="" method="post"></form>
<table id="table" border="1px" align="center" style="background-color:black; font-size:12px ;" >
<tr>
    <th>ID</th>                 
    <th>Ime</th>                
    <th>Prezime</th>                
    <th>Korisnicko ime</th>               
    <th>email</th>                        
    <th>Status racuna</th>
    <th>Zakljucanost racuna</th>
    <th>Selektiraj</th>   
    
    
</tr> 
<tr>
    <?php

        include '../admin-funk/sistem-funk.php';

        require_once ('../funkcije/spajanjebaza.php');

        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
        else
        {
            $page = 1;
        }
        $name = $_GET['a'];


        $query = "SELECT * FROM USERS";
        $result = mysqli_query($conn, $query);
    ?>   
      <?php  while($row=mysqli_fetch_assoc($result)){ ?>                    
                 
                 <tr>
                 <td><?php echo $row['userID']; ?></td>  
                 <td><?php echo $row['realSurname']; ?></td>  
                 <td><?php echo $row['realName']; ?></td>  
                 <td><?php echo $row['userName']; ?></td>  
                 <td><?php echo $row['userEmail']; ?></td>  
                 <td><?php echo $row['isActive']; ?></td>  
                 <td><?php echo $row['isLocked']; ?></td>  
                 <td><a style="font-size:13px;" href="../admin-funk/user-change.php?a=<?php echo $row['realName'];?>">Odaberi</a></td> 
                 
                </tr>       

      <?php  }?>                        
</tr>
</table>
        <!-- <?php 

            include '../admin-funk/sistem-funk.php';

            require_once ('../funkcije/spajanjebaza.php');
            //$status = $_POST['status'];
           
                if(isset($_POST['submit'])){
                $id = $_GET['a'];
                $status=$_POST['status'];
                $sql="UPDATE USERS SET isActive='$status' WHERE userID='$id;";
                $result2 = mysqli_query($conn, $sql);

                while ($rows = mysqli_fetch_assoc($result2)) {
                    $status = $rows['isActive'];
                    // $cijena = $rows['cijena'];
                   /// $kolicinaGoriva = $rows['kolicinaGoriva'];
                   // $prodanoGoriva = $rows['prodanoGoriva'];
            
                }

                    header("Location: ../admin/admin-useri.php?error=statuschanged");
                    exit();
                }
            
        
        ?>  -->

</div>

<?php  include('../templates/footer.php') ?>
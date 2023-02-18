<?php $naslov = "Baza korisnika"; include('../templates/user-header.php'); ?>

<div id="menu">
    <div><a href="../admin/admin-useri.php" >Baza korisnika </a></div><hr>
</div>

</div>
<div class="contentContainer">
<h1><?=$message?></h1><br>
<h2 style="text-align: center;">Baza korisnika</h2>


<table id="table" border="1px" align="center" style="background-color:black; font-size:12px ;" >
<tr>
    <th>ID</th>                
    <th>Ime</th>                
    <th>Prezime</th>                
    <th>Korisnicko ime</th>               
    <th>email</th>                        
    <th>Aktivan racun</th>
    <th>Zakljucanost racuna</th>
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
        $activation = $_GET['a'];

        $num_per_page = 07;
        $start_from = ($page-1)*07;

        $query = "SELECT * FROM USERS WHERE isActive='$activation'";
        $result = mysqli_query($conn, $query);

        
        while($row=mysqli_fetch_assoc($result)){ ?>                    
                 
                 <tr>
                 <td><?php echo $row['userID']; ?></td>  
                 <td><?php echo $row['realSurname']; ?></td>  
                 <td><?php echo $row['realName']; ?></td>  
                 <td><?php echo $row['userName']; ?></td>  
                 <td><?php echo $row['userEmail']; ?></td>  
                 <td><?php echo $row['isActive']; ?></td>        
                 <td><?php echo $row['isLocked']; ?></td>        
                </tr>
                 

                
      <?php  }?>                        
</tr>
</table>

</div>

<?php  include('../templates/footer.php') ?>
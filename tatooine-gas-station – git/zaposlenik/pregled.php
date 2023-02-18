



<?php $naslov = "Pregled racuna po tipu goriva"; include('../templates/user-header.php'); ?>

<div id="menu">
    <div><a href="../user/pregledracuna-b.php" >Povratak na pregled racuna </a></div><hr>
</div>

</div>
<div class="contentContainer">
<h1><?=$message?></h1><br>
<h2 style="text-align: center;">Pregled racuna po tipu goriva</h2>

<table id="table" border="1px" align="center" style="background-color:black; font-size:12px ;" >
<tr>
        <th>Broj racuna</th>					
					<th>Zaposlenik</th>					
					<th>Tip goriva</th>					
					<th>Kolicina (L)</th>					
					<th>Ukupan iznos (kn)</th>					
					<th>Datum izdavanja</th>  
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

        $query = "SELECT * FROM RACUNI WHERE gorivo='$activation'";
        $result = mysqli_query($conn, $query);

        
        while($row=mysqli_fetch_assoc($result)){ ?>                    
                 
                 <tr>
                  <td><?php echo $row['racunID']; ?></td>  
                  <td><?php echo $row['zaposlenik']; ?></td>  
                  <td><?php echo $row['gorivo']; ?></td>  
                  <td><?php echo $row['kolicina']; ?></td>  
                  <td><?php echo $row['iznos']; ?></td>   
                  <td><?php echo $row['datum']; ?></td>  
                </tr>
                 

                
      <?php  }?>                        
</tr>
</table>

</div>

<?php  include('../templates/footer.php') ?>
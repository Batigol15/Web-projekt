
<?php $naslov = "Baza korisnika"; include('../templates/user-header.php'); ?>

            <div id="menu">
            <table border="2px" align="center" style="font-size:30px">
                    <th><div><a href="admin-index.php" >Naslovnica</a></div></th>
                    <th><div><a href="admin-useri.php" >Baza korisnika </a></div></th>
                    <th><div><a href="admin-konf.php" >Konfiguracija sustava</a></div></th>
                    <th><div><a href="azuriranje.php" >Statistika</a></div></th>
                    <th> <div><a href="admin-backup.php" >Sigurnosna kopija</a></div></th>
                    <th><div><a href="admin-dnevnik.php" >Dnevnik izmjena </a></div></th>
                    <th><form action="../cookie/logout.cookie.funk.php" method="post" id="logoutform"></th>
                    <th> <button type="submit" name="logout" id="logout">Log out</button></th>
                    </form>
                </table>
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
                <th>Lozinka</th>                
                <th>Aktivan racun</th>
                <th>Zakljucan racun</th>
                <th>Aktivacijski kod</th>
                <th>Datum kreiranja racuna</th>
                <th>Filtriraj korisnike</th>
                <th>Aktiviraj/deaktiviraj</th>

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

                    $num_per_page = getPages($conn);
                    $start_from = ($page-1)*getPages($conn);

                    $query = "SELECT * FROM USERS ORDER BY realSurname limit  $start_from,$num_per_page";
                    $result = mysqli_query($conn, $query);

                    
                    while($row=mysqli_fetch_assoc($result)){ ?>                    
                             
                             <tr>
                             <td><?php echo $row['userID']; ?></td>  
                             <td><?php echo $row['realSurname']; ?></td>  
                             <td><?php echo $row['realName']; ?></td>  
                             <td><?php echo $row['userName']; ?></td>  
                             <td><?php echo $row['userEmail']; ?></td>  
                             <td><?php echo $row['userPassword']; ?></td>  
                             <td><?php echo $row['isActive']; ?></td>  
                             <td><?php echo $row['isLocked']; ?></td>  
                             <td><?php echo $row['activationCode']; ?></td>  
                             <td><?php echo $row['datum']; ?></td>  
                             <td><a style="font-size:13px;" href="../admin-funk/user-filter.php?a=<?php echo $row['isActive'];?>">Prikazi</a></td>
                             <td><a style="font-size:13px;" href="../admin-funk/user-edit.php?a=<?php echo $row['isActive'];?>">Odaberi</a></td>
                            </tr>
                             

                            
                  <?php  }?>                        
            </tr>
            </table><br>

            <div id="page" align='center'>
            <?php 

                $pr_query = "SELECT * FROM USERS";
                $pr_result = mysqli_query($conn,$pr_query);
                $total_record = mysqli_num_rows($pr_result );
                
                $total_page = ceil($total_record/$num_per_page);                

                if($page>1)
                {
                    echo "<a href='admin-useri.php?page=".($page-1)."' style='font-size: 15px' class='btn btn-danger'>Previous</a>";
                }

                
                for($i=1;$i<$total_page;$i++)
                {
                    echo "<a href='admin-useri.php?page=".$i."' style='font-size: 20px'  class='btn btn-primary'>$i</a>";
                }

                if($i>$page)
                {
                    echo "<a href='admin-useri.php?page=".($page+1)."' style='font-size: 15px'  class='btn btn-danger'>Next</a>";
                }

            ?>
            </div>

            
            </div>

<?php  include('../templates/footer.php') ?>
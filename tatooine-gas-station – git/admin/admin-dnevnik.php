
<?php $naslov = "Dnevnik izmjena"; include('../templates/user-header.php'); ?>

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
            <h2 style="text-align: center;">Dnevnik izmjena</h2>

            <form action="../zaposlenik/search-dnevnik.php" method="post">
                   Pretraga po : <input type="text" name="search" placeholder="... datum i zaposlenik...">
                    <button type="submit" name="submit-search" >Pretrazi</button>

                </form><hr>


            <table id="table" border="1px" align="center" style="background-color:black; font-size:12px ;" >
            <tr>
                <th>ID</th>
                
                <th>Radnja</th>
                
                <th>Opis</th>
                
                <th>Unix Time</th>
                
                <th>Datum</th>
                
                <th>Zaposlenik</th>
                
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

                    $query = "SELECT * FROM IZMJENE ORDER BY date  DESC limit $start_from,$num_per_page";
                    $result = mysqli_query($conn, $query);

                    
                        while($row=mysqli_fetch_assoc($result))      ////// drugacija implementacija nego kod prikaza baze korisnika. 
                                                                    //ona mi je verzija bolja, al sad je vec kasna faza u projektu. rok predaje je blizu pa ne zelim mjenjat
                        {
                    
                            echo "
                            <tr>
                            <td>".$row['ID']."</td>  
                            <td>".$row['radnja']."</td>
                            <td>".$row['opis']."</td>
                            <td>".$row['unixTime']."</td>  
                            <td>".$row['date']."</td>
                            <td>".$row['userName']."</td>
                            </tr>
                            ";
                    };
                ?>    
                    
            </tr>
            </table> 

            <br>
            <div id="page" align='center'>
            <?php 
    
                $pr_query = "SELECT * FROM IZMJENE";
                $pr_result = mysqli_query($conn,$pr_query);
                $total_record = mysqli_num_rows($pr_result );
                
                $total_page = ceil($total_record/$num_per_page);

                

                if($page>1)
                {
                    echo "<a href='admin-dnevnik.php?page=".($page-1)."' style='font-size: 15px' class='btn btn-danger'>Previous</a>";
                }

                
                for($i=1;$i<$total_page;$i++)
                {
                    echo "<a href='admin-dnevnik.php?page=".$i."' style='font-size: 20px'  class='btn btn-primary'>$i</a>";
                }

                if($i>$page)
                {
                    echo "<a href='admin-dnevnik.php?page=".($page+1)."' style='font-size: 15px'  class='btn btn-danger'>Next</a>";
                }

            ?>
            </div>
            
             
        </div>

<?php  include('../templates/footer.php') ?>
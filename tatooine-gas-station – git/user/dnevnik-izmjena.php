

<?php 


//if(isset($_GET['page']))
// {
//     $page = $_GET['page'];
// }
// else
// {
//     $page = 1;
// }

// $num_per_page = 05;
// $start_from = ($page-1)*05;

// $query = "SELECT * FROM IZMJENE ORDER BY datum  DESC limit $start_from,$num_per_page";
// $result = mysqli_query($conn, $query);


?>
<?php $naslov = "Dnevnik izmjena"; include('../templates/user-header.php'); ?>

            <div id="menu">
            <table border="2px" align="center" style="font-size:25px">
                    <th><a href="user-index.php" >Naslovnica</a></th>
                    <th><a href="izdavanjeracuna.php" >Izdavanje racuna</a></th>
                    <th><a href="pregledracuna-b.php" >Pregled racuna</a></th>
                    <th><a href="stanje.php" >Stanje u spremnicima</a></th>
                    <th><a href="azuriranje.php" >Azuriraj spremnik</a></th>
                    <th><a href="statistika.php" >Statistika prodaje</a></th>
                    <th><a href="dnevnik-izmjena.php" >Dnevnik izmjena</a></th>
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

                    
                        while($row=mysqli_fetch_assoc($result))
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
                    echo "<a href='dnevnik-izmjena.php?page=".($page-1)."' style='font-size: 15px' class='btn btn-danger'>Previous</a>";
                }

                
                for($i=1;$i<$total_page;$i++)
                {
                    echo "<a href='dnevnik-izmjena.php?page=".$i."' style='font-size: 20px'  class='btn btn-primary'>$i</a>";
                }

                if($i>$page)
                {
                    echo "<a href='dnevnik-izmjena.php?page=".($page+1)."' style='font-size: 15px'  class='btn btn-danger'>Next</a>";
                }

            ?>
            </div>
            
             
        </div>

<?php  include('../templates/footer.php') ?>
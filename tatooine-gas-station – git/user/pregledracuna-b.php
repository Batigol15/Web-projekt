
<?php $naslov = "Pregled racuna"; include('../templates/user-header.php'); ?>

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
                <h2 style="text-align: center;">Pregled racuna</h2><hr>               
                <form action="../zaposlenik/search.php" method="post">
                   Pretraga po : <input type="text" name="search" placeholder="... datum i zaposlenik...">
                    <button type="submit" name="submit-search" >Pretrazi</button>

                </form><hr>
                <br>
                
                <table id="table" border="1px" align="center" style="background-color:black; font-size:12px ;" >
				<tr>
					<th>Broj racuna</th>					
					<th>Zaposlenik</th>					
					<th>Tip goriva</th>					
					<th>Kolicina (L)</th>					
					<th>Ukupan iznos (kn)</th>					
					<th>Datum izdavanja</th>
                    <th>Sortiraj po vrsti goriva</th>		
				</tr> 
                <tr>
                    <?php 

                        require_once ('../funkcije/spajanjebaza.php');

                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                        }
                        else{
                            $page = 1;
                        }

                        $num_per_page = 7;
                        $start_from = ($page-1)*07;
                        $query = "SELECT * from RACUNI ORDER BY datum  DESC limit $start_from,$num_per_page";
                        $result = mysqli_query($conn, $query);
                        
                        while($row=mysqli_fetch_assoc($result)){?>
                            <tr>
                             <td><?php echo $row['racunID']; ?></td>  
                             <td><?php echo $row['zaposlenik']; ?></td>  
                             <td><?php echo $row['gorivo']; ?></td>  
                             <td><?php echo $row['kolicina']; ?></td>  
                             <td><?php echo $row['iznos']; ?></td>   
                             <td><?php echo $row['datum']; ?></td>  
                             <td><a style="font-size:13px;" href="../zaposlenik/pregled.php?a=<?php echo $row['gorivo'];?>">Sortiraj</a></td>
                            </tr>
                        <?php } ?>  
                                              
                </tr>
                </table> 
                <br>
                <div id="page" align='center'>
                <?php         
                    $pr_query = "SELECT * FROM RACUNI";
                    $pr_result = mysqli_query($conn,$pr_query);
                    $total_record = mysqli_num_rows($pr_result );
                    
                    $total_page = ceil($total_record/$num_per_page);    

                    if($page>1){
                        echo "<a href='pregledracuna-b.php?page=".($page-1)."' style='font-size: 15px' class='btn btn-danger'>Previous</a>";
                    }                    
                    for($i=1;$i<$total_page;$i++){
                        echo "<a href='pregledracuna-b.php?page=".$i."' style='font-size: 20px'  class='btn btn-primary'>$i</a>";
                    }
                    if($i>$page){
                        echo "<a href='pregledracuna-b.php?page=".($page+1)."' style='font-size: 15px'  class='btn btn-danger'>Next</a>";
                    }
                ?>
                </div>   
                
            </div>
<?php  include('../templates/footer.php') ?>

<?php $naslov = "Rezultat pretrage"; include('../templates/user-header.php');?>

</div>
<div class="contentContainer">
    <h1><?=$message?></h1><br>
    <h2 style="text-align: center;">Rezultat pretrage</h2><hr>
                         
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

        require_once ('../funkcije/spajanjebaza.php');

        // if (isset($_GET['page'])) {

        //     $page = $_GET['page'];
        //   }
        //   else{
        //     $page = 1;
        //   }
          
        //   $num_per_page = 05;
        //   $start_from = ($page - 1) * 05;   

        $search = $_POST['search'];

        if(isset($_POST['submit-search'])){

            if (!empty($search)) {
             
                $search1 = mysqli_real_escape_string($conn, $_POST['search']);
                
                $sql = "SELECT * FROM IZMJENE WHERE userName LIKE '%$search1%' OR date LIKE '%$search1%' ORDER BY ID DESC";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);

                echo " " . $queryResult . " rezultata pretrage ";

                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
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
                    }
                }

            } 
            else {
               // header("Location: ../user/pregledracuna-b.php?error=emptysearchfield");
                echo "Nema rezultata koji se podudaraju sa filterima pretrage";
                exit();
            }
                    
        }

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

    if($page>1){
        echo "<a href='search.php?page=".($page-1)."' style='font-size: 15px' class='btn btn-danger'>Previous</a>";
    }                    
    for($i=1;$i<$total_page;$i++){
        echo "<a href='search.php?page=".$i."' style='font-size: 20px'  class='btn btn-primary'>$i</a>";
    }
    if($i>$page){
        echo "<a href='search.php?page=".($page+1)."' style='font-size: 15px'  class='btn btn-danger'>Next</a>";
    }
?> 
<?php  include('../templates/footer.php') ?> 
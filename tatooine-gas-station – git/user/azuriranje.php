
<?php $naslov = "Azuriranje"; include('../templates/user-header.php'); ?>
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
                <h1><?=$message?></h1>
                <h4>Azuriranje spremnika-unos goriva</h4>

                <form action="../zaposlenik/azuriranje-goriva.php" method="post">

                    <select name="odabirGoriva" id="odabirGoriva">
                        <option value="0" disabled >Odaberite tip goriva</option>
                        <option value="1">Benzin</option>
	                    <option value="2">Diesel</option><br><br>        
                    </select>

                    <label for="unosKolicine"><br></br>Unesite kolicinu goriva:</label><br>
                    <input type="text" id="unosKolicine" name="unosKolicine"><br><br>
                    <input class="btn" type="submit" name="submit"  class="submit" value="Posalji"/><br><br>
                </form>   
               
                <form action="" method="post">   
                    <h4>Azuriranje spremnika-brisanje goriva</h4>

                    <select name="odabirgorivab" id="">
                         <option value="Benzin">Benzin</option>
                         <option value="Diesel">Dizel</option>
                     </select>

                    <input type="submit" value="Brisanje" name="deleteall">
                </form>

                 
                    <?php   ////////////////////////////////////// ZADATAK NA SATU

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


                        $odabirb = $_POST['odabirgorivab'];

                        if (isset($_POST['deleteall'])) {

                        $sql_delete = "UPDATE GORIVO SET kolicinaGoriva = 0 WHERE tipGoriva = '$odabirb' ";

                        mysqli_query($conn, $sql_delete);
                       // header("Location: azuriranje.php?error=fueldeleted");
                        exit();
                        }
                    ?>


               
                

            
               
            </div>
<?php  include('../templates/footer.php') ?>
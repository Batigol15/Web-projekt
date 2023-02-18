<?php include('../funkcije/spajanjebaza.php') ?>
<!-- Location dodana ../ -->
<?php $naslov = "Izdavanje racuna"; include('../templates/user-header.php'); ?>
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
                <h4>Izdavanje racuna</h4>

                <form action ="../zaposlenik/izdavanje.php" method="post">
                <select name="tipGoriva" id="tipGoriva">
                    <option value="0" disabled>Odaberite tip goriva</option>
                    <option value="Benzin">Benzin   ---9.65</option>
	                <option value="Diesel">Diesel   ---8.78</option><br><br>        
                </select>

                <label for="kolicinaGoriva"><br></br>Unesite kolicinu goriva:</label><br>
                <input type="text" id="unosKolicine" name="unosKolicine"><br><br>

                <!-- <label for="cijena">Unesite cijenu goriva:</label><br>
                <input type="text" id="cijena" name="cijena"><br><br>	 -->

                <!-- <label for="zaposlenik">Unesite zaposlenika:</label><br>
                <input type="text" id="zaposlenik" name="zaposlenik"><br><br> -->

                <input class="btn" type="submit" name="submit"  class="submit" value="Posalji"/><br><br><br><br>	
               
               
            </div>
<?php  include('../templates/footer.php') ?>
<?php include('../funkcije/spajanjebaza.php') ?>
<!-- Location dodana ../ -->
<?php $naslov = "Naslovnica"; include('../templates/user-header.php'); ?>

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
               
                <p> Postovani zaposlenici Tatooine gas stationa, dana vam je na rukovanje platforma i gorivo u vlasnistvu Hutt Cartella.
                    Kontrola ce se vrsit svakodnevno!
                    Svako odstupanje od kontrolnih tocaka je kaznjivo. Sve sto imate radit je koristit se menu-om na nacin da odaberete sljedece stavke: <br><br>
                
                
                    1. Izdavanje racuna <br>
                    2. Pregledavanje racuna <br>
                    3. Stanje u spremnicima <br>
                    4. Azuriranje spremnika<br>
                    5. Statistika prodaje<br>
                </p>
               
            </div>
            
<?php  include('../templates/footer.php') ?>
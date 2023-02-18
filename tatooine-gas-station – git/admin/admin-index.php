<!-- <?php include('../funkcije/spajanjebaza.php') ?> //Promjenje path, prije je bilo bez ../ -->
<?php $naslov = "Naslovnica"; include('../templates/user-header.php'); ?>
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
                    </form>
                </div>

            </div>
            <div class="contentContainer">
                <h1><?=$message?></h1>
               
                <p> Postovani zaposlenici Tatooine gas stationa, dana vam je na rukovanje platforma i gorivo u vlasnistvu Hutt Cartella.
                    Kontrola ce se vrsit svakodnevno!
                    Svako odstupanje od kontrolnih tocaka je kaznjivo. Sve sto imate radit je koristit se menu-om na nacin da odaberete sljedece stavke: <br><br>
                
                
                    1. Baza korisnika  <br>
                    2. Konfiguracija sustava <br>
                    3. Statistika koristenja sustava<br>
                    4. Sigurnosna kopija<br>
                    5. Dnevnik izmjena<br>
                </p>
               
            </div>
<?php  include('../templates/footer.php') ?>
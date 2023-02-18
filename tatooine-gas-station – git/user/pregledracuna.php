
<?php $naslov = "Pregled racuna"; include('../templates/user-header.php'); ?>

                <div id="menu">
                    <div><a href="user-index.php" >Naslovnica</a></div><hr>
                    <div><a href="izdavanjeracuna.php" >Izdavanje racuna</a></div><hr>
                    <div><a href="pregledracuna.php" >Pregled racuna</a></div><hr>
                    <div><a href="stanje.php" >Stanje u spremnicima</a></div><hr>
                    <div><a href="azuriranje.php" >Azuriraj spremnik</a></div><hr>
                    <div><a href="statistika.php" >Statistika prodaje</a></div><hr>
                    <div><a href="dnevnik-izmjena.php" >Dnevnik izmjena</a></div><hr>
                    <form action="../cookie/logout.cookie.funk.php" method="post" id="logoutform">
                    <button type="submit" name="logout" id="logout">Log out</button>
                    </form>
                </div>

            </div>
            <div class="contentContainer">
                <h1><?=$message?></h1><br>
                <h2 style="text-align: center;">Pregled racuna</h2>

                <table id="table" border="1px" align="center">
				<tr>
					<th>Broj racuna</th>
					
					<th>Zaposlenik</th>
					
					<th>Tip goriva</th>
					
					<th>Kolicina (L)</th>
					
					<th>Ukupan iznos (kn)</th>
					
					<th>Datum izdavanja</th>
					
				</tr> 
				

				 <?php include('../zaposlenik/pregled.php') ?>  
	
	

			</table> 
                 
            </div>
<?php  include('../templates/footer.php') ?>
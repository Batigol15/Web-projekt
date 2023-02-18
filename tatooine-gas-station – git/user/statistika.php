<?php $naslov = "Statistika"; include('../templates/user-header.php'); ?>
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
                <h4>Statistika prodanog goriva</h4>

                <table>
					<tr>
						<th>Do sada je ukupno prodano BENZINA : </th>
						<td id="ispis1"><?php include('../zaposlenik/statistikaBenzin.php')?> litara</td>
					</tr>
						<tr>
						<th>Do sada je ukupno prodano DIESELA : </th>
						<td id="ispis2"><?php include('../zaposlenik/statistikaDiesel.php')?> litara</td>
					</tr>
				</table>
            </div>
<?php  include('../templates/footer.php') ?>
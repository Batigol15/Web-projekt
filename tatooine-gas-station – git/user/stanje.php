
<?php $naslov = "Stanje"; include('../templates/user-header.php'); ?>
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
                <h4>STANJE GORIVA U SPREMNICIMA</h4>

                <table>

						<tr>
							<th>Raspolozivo stanje BENZINA u spremnicima : </th>

                            <button type="button" onclick="loadBenzin();">Ucitaj stanje BENZINA</button>
							<td id="ispis1">Ucitaj stanje...</td>
                            <td></td>
						</tr>
						<tr>
							<th>Raspolozivo stanje DIESELA u spremnicima : </th>
                            <button type="button" onclick="loadDiesel();">Ucitaj stanje DIESELA</button>
							<td id="ispis2">Ucitaj stanje...</td>
                            <td></td>
						</tr>
					</table>

               
            </div>
            <div class="footerContainer">
                created by Toni Amizic and powered by Hutt cartell
                
            </div>
        </div>  
        
        <script src="./JS/change.js"></script>
        <script>
                function loadBenzin(){
                    const xhttp =new XMLHttpRequest();
                    xhttp.open("GET", "../zaposlenik/stanjeBenzin.php");

                    xhttp.onload=function(){
                        document.getElementById('ispis1').innerHTML=this.responseText;
                    }
                    xhttp.send();
                }
                function loadDiesel(){
                    const xhttp =new XMLHttpRequest();
                    xhttp.open("GET", "../zaposlenik/stanjeDiesel.php");

                    xhttp.onload=function(){
                        document.getElementById('ispis2').innerHTML=this.responseText;
                    }
                    xhttp.send();
                }


        </script>
        

    </body>
    
</html>
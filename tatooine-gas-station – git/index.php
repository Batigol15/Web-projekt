<?php include('funkcije/spajanjebaza.php') ?>
<?php $naslov = "Tatooine gas station";

include('templates/header.php'); ?>
                <div id="menu">
                    <table border="2px" align="right">
                      <td><input type="submit" onclick="changeColor('content'); changeFont('content');" value="Pristupacnost"></td>
                      <td><input type="submit" onclick="myFunction();" id="submitBtn"  value="Povratak"></td>
                    </table>
                    <table border="2px" align="left" style="font-size:30px">
                      <td><a href="./about.php">O autoru</a></td>
                      <td><a href="./documentation.php">Dokumentacija</a></td>
                    </table>
                </div> 

            </div>
            <div class="contentContainer" id="content">
                <h1>Dobrodosli,</h1>
                <hr>
                <table>
                    <h4>Provjerite rasplozivost goriva u nasim spremnicima</h4>

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
                        <hr>
                    Ako ste vec dio tima  <a href="./login.php">Logiraj se</a>  ili ako to jos niste  <a href="./signup.php">Pristupi registraciji</a>
                    <br><hr>
                    Kontakritajte nas <a href="contact.php" >Ovdje</a>
                    <br><hr>
                </p>
               
            </div>
            <script>
                function loadBenzin(){
                    const xhttp =new XMLHttpRequest();
                    xhttp.open("GET", "./zaposlenik/stanjeBenzin.php");

                    xhttp.onload=function(){
                        document.getElementById('ispis1').innerHTML=this.responseText;
                    }
                    xhttp.send();
                }
                function loadDiesel(){
                    const xhttp =new XMLHttpRequest();
                    xhttp.open("GET", "./zaposlenik/stanjeDiesel.php");

                    xhttp.onload=function(){
                        document.getElementById('ispis2').innerHTML=this.responseText;
                    }
                    xhttp.send();
                }


        </script>
            
<?php  include('templates/footer.php') ?>

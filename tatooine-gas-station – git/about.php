<?php $naslov = "O autoru"; include('templates/header.php'); ?>
                <div id="menu">
                    <table border="2px" align="right">
                      <td><input type="submit" onclick="changeColor('content'); changeFont('content');" value="Pristupacnost"></td>
                      <td><input type="submit" onclick="myFunction();" id="submitBtn"  value="Povratak"></td>
                    </table>
                    <table border="2px" align="left" style="font-size:30px">
                      <td><a href="./about.php">O autoru</a></td>
                      <td><a href="./documentation.php">Dokumentacija</a></td>
                      <td><a href="./index.php">Naslovna</a></td>
                    </table>
                </div> 

            </div>
            <div class="contentContainer" id="content">
               
            <table border="1px" align="center" style="background-color:black; font-size:20px ;" >
                    <tr>
                            <th>Ime i prezime</th>
                            <th>OiB</th>
                            <th>email</th>
                            <th>Slika</th>
                    </tr>
                    <tr>
                            <td>Toni Amizic</td>
                            <td>------------</td>
                            <td>toni.amizic@aspira.hr / toni.amizic@gmail.com</td>
                            <td><img height="100" src="./slike/slika-dokumentacija.jpg" width="100"></td>
                        </tr>
                </table>
                
               
            </div>
<?php  include('templates/footer.php') ?>

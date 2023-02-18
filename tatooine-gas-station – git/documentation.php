<?php $naslov = "Dokumentacija"; include('templates/header.php'); ?>
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
                <hr>
                <h4>Opis projektnog zadatka</h4>
                <p>Za ovaj projektni zadatak bilo je potrebno napisati program u web okruzenju koji sluzi zaposlenicima benzinske crpke za evidenciju i prodaju goriva.
                    Samu stranicu koriste zaposlenici koji imaju direktan pristup gorivu, u smislu prodaje i evidencije istog, te administrator koji se bavi sistemskim poslovima unutar same stranice.
                 Osim zaposlenika benzinske stanice, koji su pri tom registirani korisnici, uvid u stranicu imaju i neregistrirani korisnici (gosti).</p>
                
                <p>Administrator u svom okruzenju ima opciju upravljanja nad samim sistemom, te kontrolu nad registiranim korisnicima. Sto se tice upravljanja sistemom
                    administrator ima opciju aktivacije i deaktivacije korisnickih racuna, te mjenjanja postavki unutar same stranice poput kontrole tranjanja cookie-a i broja stranica unutar samog stranicenja.
                    Takodjer moze izvrsit sigurnosnu pohranu baze podataka, kao i njenu obnovu, te ima uvid u dnevnik izmjena koje su napravili korisnici i statistiku koristenja sustava.</p>

                <p>Zaposlenik u svom radnom okruzenju ima opcije izdavanja racuna za prodano gorivo, azuriranje stanja spremnika goriva, te uvide u spremnike, statistiku prodanog goriva i dnevnik izmjena od strane svojih kolega.
                    </p>

                <p>Gost ima uvid na stranicu sa informacijama o samoj tvrtci, te trenutnom ponudom goriva s kojom firma raspolaze. Gost ima takodjer mogucnost kontaktiranja sluzbe za korisnike u vidu tekstualne poruke.
                 <hr></p>

                    
                    <h4>Opis koristenih tehnologija i alata</h4>
                <p>Kao alat za programiranje koristen je Visual Studio Code.<br>
                    Kao hosting koristen je XAMPP.<br>
                    Programske tehnologije koristene pri izradi projekta su PHP, JavaScript (jQuery) te phpMyAdmin kao baza podataka.<br>
                   

                
                    <h4>Popis mapa i datoteka</h4>


                    <table >
                    <th>Root
                        <ul>
                            <li>index.php</li>
                            <li>login.php</li>
                            <li>signup.php</li>
                            <li>contact.php</li>
                            <li>activation.php</li>
                            <li>about.php</li>
                            <li>documentation.php</li>
                            <li>style.css</li>
                            <li>login-signup.css</li>
                        </ul>
                    </th>
                    <th>zaposlenik
                        <ul>
                            <li>azuriranje-goriva.php</li>
                            <li>izdavanje.php</li>
                            <li>search-dnevnik.php</li>
                            <li>stanjeBenzin.php</li>
                            <li>stanjeDiesel.php</li>
                            <li>statistikaBenzin.php</li>
                            <li>statistikaDiesel.php</li>
                            <li>pregled.css</li>
                        </ul>
                    </th>

                    <th>user
                        <ul>
                            <li>azuriranje.php</li>
                            <li>dnevnik-izmjena.php</li>
                            <li>izdavanjeracuna.php</li>
                            <li>podaci-stanje.php</li>
                            <li>pregledracuna-b.php</li>
                            <li>stanje.php</li>
                            <li>statistika.php</li>
                            <li>user-index.css</li>
                        </ul>
                    </th>

                    <th>templates
                        <ul>
                            <li>footer.php</li>
                            <li>header.php</li>
                            <li>login.signup.act.header.php</li>
                            <li>signup-footer.php</li>
                            <li>pregledracuna-b.php</li>
                            <li>user-footer.php</li>
                            <li>user-header.php</li>
                        </ul>
                    </th>
                    </table>

                    <table>
                    <th>slike
                        <ul>
                            <li>logo.jpg</li>
                            <li>pozadina.jpg</li>
                            <li>slika-dokumentacija.jpg</li>
                            <li>web-projekt.jpg</li>
                        </ul>
                    </th>
                    <th>PHPMailer-6.7.1
                        <ul>
                            <li>Exception.php</li>
                            <li>OAuth.php</li>
                            <li>OAuthTokenProvider.php</li>
                            <li>PHPMailer.php</li>
                            <li>POP3.php</li>
                            <li>send.php</li>
                            <li>SMTP.php</li>
                        </ul>
                    </th>

                    <th>JS
                        <ul>
                            <li>ajax-username.js</li>
                            <li>change.js</li>
                            <li>jquery-3.6.2.min.js</li>
                            <li>signup.js</li>
                            <li>tou-cookie.js</li>
                        </ul>
                    </th>

                    <th>funkcije
                        <ul>
                            <li>activation.funk.php</li>
                            <li>contact.funk.php</li>
                            <li>funkcije.funk.php</li>
                            <li>login.funk.php</li>
                            <li>provjera.funk.php</li>
                            <li>signup.funk.php</li>
                            <li>spajanjebaza.php</li>
                        </ul>
                    </th>
                    </table>

                    <table>
                    <th>cookie
                        <ul>
                            <li>cookie.php</li>
                            <li>logout.cookie.funk.php</li>
                        </ul>
                    </th>
                    <th>admin-funk
                        <ul>
                            <li>backup.php</li>
                            <li>dnevnik.php</li>
                            <li>restore-db.php</li>
                            <li>sistem-funk.php</li>
                            <li>user-change.php</li>
                            <li>user-edit.php</li>
                            <li>user-filter.php</li>
                            <li>user-tablica.css</li>
                        </ul>
                    </th>

                    <th>admin
                        <ul>
                            <li>admin-backup.php</li>
                            <li>admin-dnevnik.php</li>
                            <li>admin-index.php</li>
                            <li>admin-konf.php</li>
                            <li>admin-useri-b.php</li>
                        </ul>
                    </th>
                    </table>
                    <hr>

                    <h4>UML dijagram slucajeva koristenja</h4>

                    <table >

                            <td><img height="100%" src="./slike/web-projekt.jpg" width="100%"></td>
                        </tr>
                     </table>
               
            </div>
<?php  include('templates/footer.php') ?>

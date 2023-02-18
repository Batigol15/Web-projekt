<?php include('funkcije/spajanjebaza.php') ?>
<?php $naslov = "Registracija racuna"; include('templates/login.signup.act.header.php') ?> 

            <div class="loginContainer">
                <h2>Registriraj se</h2>
                <form action="./funkcije/signup.funk.php" method="post" name="signup" id="signup">
                    
                    <input type="text"  name="realname" id="realname" placeholder="Unesite ime" oninput="nameKontrola();"><br>
                    <span id="realnamespan" ></span><br>
                    <input type="text"  name="realsurname" id="realsurname" placeholder="Unesite prezime" oninput="surnameKontrola();"><br>
                    <span id="realsurnamespan" ></span><br>
                    <input type="text"  name="username" id="username" placeholder="Unesite korisnicko ime" oninput="provjeriUsername();"><br>
                    <span id="usernamespan" ></span><br>
                    <input type="text"  name="useremail" id="useremail" placeholder="Unesite email" oninput="emailKontrola();"><br>
                    <span id="useremailspan" ></span><br>
                    <input type="password"  name="userpassword" id="userpassword" placeholder="Unesite lozinku" oninput="passwordKontrola();"><br>
                    <span id="userpasswordspan" ></span><br>
                    <input type="password"  name="passwordrep" id="passwordrep" placeholder="Ponovite lozinku" oninput="passwordKontrola();"><br>
                    <span id="passwordrepspan" ></span><br>
    
                    <button type="submit" name="submit" id="submit">Submit</button>
                </form>
                <hr>
                <p>Vec si dio tima </p> <a href="./login.php">Logiraj se</a>
            </div>

<?php include('templates/signup.footer.php') ?>
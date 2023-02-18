<?php include('funkcije/spajanjebaza.php') ?>
<?php $naslov = "Aktivacija racuna"; include('templates/login.signup.act.header.php') ?>

            <div class="loginContainer">
                <h2>Aktivacija korisnickog racuna</h2>
                <form action="./funkcije/activation.funk.php" method="post" name="activation" id="activation">

                    <input type="text"  name="useremail" id="useremail" placeholder="Unesite email" oninput="emailKontrola();"><br>
                    <span id="useremailspan" ></span><br>

                    <input type="text"  name="activationcode" id="activationcode" placeholder="Unesite code" maxlength="5"><br>
                    <span id="useremailspan" ></span><br>
                    
    
                    <button type="submit" name="submit" id="submit">Submit</button>
                </form>
                <hr>
                <p>Povratak na <a href="./login.php">Logiranje</a> ili <a href="./signup.php">Registraciju</a></p>
            </div>

            <div class="footerContainer">
                powered by Hutt cartell
            </div>
        </div>    
    </body>
        <script src="./JS/ajax-username.js"></script>
        <script src="./JS/jquery-3.6.2.min.js"></script>
        <script src="./JS/signup.js"></script>

</html>
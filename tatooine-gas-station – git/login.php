<?php include('funkcije/spajanjebaza.php') ?>
<?php $naslov = "Log in"; include('templates/login.signup.act.header.php') ?>

            <div class="loginContainer">
        
                <h2>Logiraj se</h2>
                <form action="funkcije/login.funk.php" method="post">
                    
                    <input type="text"  name="username" id="username" placeholder="*Korisnicko ime"><br>
                    <span id="usernamespan"></span>

                    <input type="password"  name="userpassword" id="userpassword" placeholder="*Lozinka"><br>
                    <span id="userpasswordspan"></span>

                    <div id="recaptcha"><div class="g-recaptcha" data-sitekey="6LfAoLgjAAAAAJ7VRndRic40xAx4bDNjjwuSah1w" ></div></div>
    
                    <input type="submit" name="submit" value="Log in" id="submit" >
                </form>
                <hr>
                <p>Nisi dio Hutt cartella?<a href="./signup.php">Postani clan vec danas!</a></p>
            </div>
<?php  include('templates/footer.php') ?>
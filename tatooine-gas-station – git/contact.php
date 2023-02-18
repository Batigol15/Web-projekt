<?php include('funkcije/spajanjebaza.php') ?>
<?php $naslov = "Tatooine gas station - Kontakt"; include('templates/login.signup.act.header.php') ?> 

            <div class="loginContainer">
           
                <h2>Kontaktiraj nas</h2>
                <hr>
                <form action="./funkcije/contact.funk.php" method="post" name="signup" id="signup">
                    
                    <input type="text"  name="name" id="name" placeholder="Vase ime"><br>
                    <span id="namespan" ></span><br>
                    <input type="text"  name="email" id="email" placeholder="Vas email"><br>
                    <span id="emailspan" ></span><br>
                    <input type="text"  name="subject" id="subject" placeholder="Naslov"><br>
                    <span id="subjectspan" ></span><br>
                    <textarea name="message" placeholder="Vasa poruka"></textarea><br>
                    <span id="textspan" ></span><br>
                    <button type="submit" name="submit" id="submit">Posalji poruku</button>
                </form>
                <hr>
                <p>Povratak na naslovnicu<a href="./index.php">Naslovnica</a></p>

            </div>

<?php  include('templates/footer.php') ?>
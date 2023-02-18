<!-- <?php include('../funkcije/spajanjebaza.php') ?> //Promjenje path, prije je bilo bez ../ -->
<?php $naslov = "Naslovnica"; include('../templates/user-header.php'); ?>
                <div id="menu">
                <table border="2px" align="center" style="font-size:30px">
                    <th><div><a href="admin-index.php" >Naslovnica</a></div></th>
                    <th><div><a href="admin-useri.php" >Baza korisnika </a></div></th>
                    <th><div><a href="admin-konf.php" >Konfiguracija sustava</a></div></th>
                    <th><div><a href="azuriranje.php" >Statistika</a></div></th>
                    <th> <div><a href="admin-backup.php" >Sigurnosna kopija</a></div></th>
                    <th><div><a href="admin-dnevnik.php" >Dnevnik izmjena </a></div></th>
                    <th><form action="../cookie/logout.cookie.funk.php" method="post" id="logoutform"></th>
                    <th> <button type="submit" name="logout" id="logout">Log out</button></th>
                    </form>
                </table>
                    </form>
                </div>

            </div>
            <div class="contentContainer">
                <h1><?=$message?></h1>

                <form action="" method="post">

                    <p>Podesavanje postavki unutar samog sustava. Opcije za promjenju trajanja cookie-a i stranicenja unutar same aplikacije.</p><hr>

                    <h3>cookie</h3>
                    <input type="text" name="cookieset"><br>
                    <button type="submit" name="submit">Update cookie</button><hr>

                    <h3>set pages</h3>
                    <input type="text" name="pageset"><br>

                    <button type="submit" name="submitp">Update pages</button><hr>
                </form>

                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname="benzinska";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password,$dbname);
                    
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }


                    if(isset($_POST['submit'])){

                        $setcookie=$_POST['cookieset'];
                        
                        if($setcookie >= 1){
                            $sql_update = " UPDATE KONFIGURACIJA SET value='$setcookie' WHERE name='Cookie time'";
                            $result = mysqli_query($conn, $sql_update);

                            if($result=true){

                                //dnevnik izmjena
                                header("Location: ./admin-konf.php?error=cookieupdated ");
                                exit();
                         }
                        }

                    }

                    if(isset($_POST['submitp'])){

                        $setpage=$_POST['pageset'];
                        
                        if($setpage >= 1){
                            $sql_update = " UPDATE KONFIGURACIJA SET value='$setpage' WHERE name='Pages'";
                            $result = mysqli_query($conn, $sql_update);

                            if($result=true){

                                //dnevnik izmjena
                                header("Location: ./admin-konf.php?error=pagesupdated ");
                                exit();
                         }
                        }

                    }
                    
                ?>
               
            </div>
<?php  include('../templates/footer.php') ?>
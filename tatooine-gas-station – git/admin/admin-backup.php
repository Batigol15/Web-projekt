
<?php $naslov = "Naslovnica"; include('../templates/user-header.php'); ?>
                    <div id="menu">
                    <table border="2px" align="center" style="font-size:30px">
                    <th><div><a href="admin-index.php" >Naslovnica</a></div></th>
                    <th><div><a href="admin-useri.php" >Baza korisnika </a></div></th>
                    <th><div><a href="admin-konf.php" >Konfiguracija sustava</a></div></th>
                    <th><div><a href="azuriranje.php" >Statistika</a></div></th>
                    <th> <div><a href="admin-backup.php" >Sigurnosna kopija</a></div></th>
                    <th><div><a href="admin-dnevnik.php" >Dnevnik izmjena</a></div></th>
                    <th><form action="../cookie/logout.cookie.funk.php" method="post" id="logoutform"></th>
                    <th> <button type="submit" name="logout" id="logout">Log out</button></th>
                    </form>
                </table>
                </div>

            </div>
            <div class="contentContainer">
                <h1><?=$message?></h1>

                <div>   
                    <form action="../admin-funk/backup.php" method="post">
                    <button  type="submit" name="backup" >Pohrani pricuvnu bazu podataka</button><hr>
                    </form>
                        <?php

                            if (! empty($response)) {
                                ?>
                            <div class="response <?php echo $response["type"]; ?>
                                ">
                                <?php echo nl2br($response["message"]); ?>
                            </div>
                            <?php
                            }
                            ?>
                          
                            <form method="post" action="" enctype="multipart/form-data"
                                id="frm-restore">
                                <div class="form-row">
                                    <div>Odaberi datoteku</div>
                                    <div>
                                        <input type="file" name="backup_file" class="input-file" /> 
                                        <input type="text" name="backup_database" placeholder="Ime baze..">    
                                    </div><hr>
                                </div>
                                <div>
                                    <input type="submit" name="restore" value="Obnovi bazu podataka"/>
                                </div><hr>
                    </form>
                    <?php

                        if (isset($_POST['restore'])) {

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                           

                            $dbname = $_POST['backup_database'] ?? '';

                            $conn1 = mysqli_connect($servername,$username,$password);
                                if (!$conn1) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }
                            
                            $sql = "CREATE DATABASE {$dbname}";

                                if (mysqli_query($conn1, $sql)) {
                                echo "<p style='color:green'>Database restored successfully!</p>";
                                } 
                                else {
                                echo "Error creating database: " . mysqli_error($conn1);
                                }

                            $conn = mysqli_connect($servername,$username,$password,$dbname);}

                            if (! empty($_FILES)) {
                                
                                if (! in_array(strtolower(pathinfo($_FILES['backup_file']["name"], PATHINFO_EXTENSION)), array(
                                    "sql"
                                ))) {
                                    $response = array(
                                        "type" => "error",
                                        "message" => "Invalid File Type"
                                    );
                                } 
                                else {
                                    if (is_uploaded_file($_FILES['backup_file']["tmp_name"])) {
                                        move_uploaded_file($_FILES['backup_file']["tmp_name"], $_FILES['backup_file']["name"]);
                                        $response = restoreMysqlDB($_FILES['backup_file']["name"], $conn);
                                    }
                                }
                            }
                        
                            function restoreMysqlDB($fileLocation, $conn)
                            {

                                        //  $query = '';
                                        // $sqlScript = file('benzinska.sql');
                                        // foreach ($sqlScript as $line)	{
                                            
                                        //     $startWith = substr(trim($line), 0 ,2);
                                        //     $endWith = substr(trim($line), -1 ,1);
                                            
                                        //     if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
                                        //         continue;
                                        //     }
                                                
                                        //     $query = $query . $line;
                                        //     if ($endWith == ';') {
                                        //         mysqli_query($conn,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
                                        //         $query= '';		
                                        //     }
                                        // }

                                        $sql = '';
                                        $error = '';
                                        
                                        if (file_exists($fileLocation)) {
                                            $lines = file($fileLocation);
                                            
                                            foreach ($lines as $line) {
                                                
                                            
                                                if (substr($line, 0, 2) == '--' || $line == '') {
                                                    continue;
                                                }
                                                
                                                $sql .= $line;
                                                
                                                if (substr(trim($line), - 1, 1) == ';') {
                                                    $result = mysqli_query($conn, $sql);
                                                    if (! $result) {
                                                        $error .= mysqli_error($conn) . "\n";
                                                    }
                                                    $sql = '';
                                                }
                                            } 
                                            
                                            if ($error) {
                                                $response = array(
                                                    "type" => "error",
                                                    "message" => $error
                                                );
                                            } 
                                            else {
                                                $response = array(
                                                    "type" => "success",
                                                    "message" => "Database Restore Completed Successfully."
                                                );
                                            }
                                        }
                                         
                                        return $response;
                               
                            }
                    ?>


                

             
                        
                </div>

            </div>
<?php  include('../templates/footer.php') ?>
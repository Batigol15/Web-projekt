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

<form method="post" action="" enctype="multipart/form-data" id="frm-restore">
    <div class="form-row">
        <br>
        <div>Choose Backup File</div>
        <div>
            <input type="file" name="backup_file" id="backup_file"/>
            <input type="text" name="backup_database" placeholder=" Database name..">
        </div>
    </div>
    <div>
        <input type="submit" name="restore" id="restore" value="Restore"/>
    </div>
</form>
<?php

if (isset($_POST['restore'])) {

    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";

    $dbName = $_POST['backup_database'] ?? '';

    $conn1 = mysqli_connect($serverName,$dbUsername,$dbPassword);
    if (!$conn1) {
        die("Connection failed: " . mysqli_connect_error());
    }
       
    $sql = "CREATE DATABASE {$dbName}";

    if (mysqli_query($conn1, $sql)) {
    echo "<p style='color:green'>Database restored successfully!</p>";
    } 
    else {
    echo "Error creating database: " . mysqli_error($conn1);
    }

    $conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);}

    if (! empty($_FILES)) {
        
        if (! in_array(strtolower(pathinfo($_FILES["backup_file"]["name"], PATHINFO_EXTENSION)), array(
            "sql"
        ))) {
            $response = array(
                "type" => "error",
                "message" => "Invalid File Type"
            );
        } 
        else {
            if (is_uploaded_file($_FILES["backup_file"]["tmp_name"])) {
                move_uploaded_file($_FILES["backup_file"]["tmp_name"], $_FILES["backup_file"]["name"]);
                $response = restoreMysqlDB($_FILES["backup_file"]["name"], $conn);
            }
        }
    }
  
    function restoreMysqlDB($filePath, $conn)
    {
        $sql = '';
        $error = '';
        
        if (file_exists($filePath)) {
            $lines = file($filePath);
            
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

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="benzinska";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// dohvat tablica iz baze//
$tables = array();
$sql= "SHOW TABLES";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_row($result)){
    $tables[] = $row[0];
}


$return='';
foreach($tables as $table){

    $result = "SELECT * FROM" .$table;
    $num_fields = mysqli_query($conn, $query);
     
    ///kod za kreiranje tablice
    $return .= 'DROP TABLE'.$table.';';
    $query = 'SHOW CREATE TABLE' .$table;
    $result = mysqli_query($conn, $query);
    $row2 = mysqli_fetch_row($result);
    $return .= "\n\n" . $row2[1] . ";\n\n";

   // $sqlScript .= "\n\n" . $row[1] . ";\n\n";

    //dohvat podataka
    //$query = "SELECT * FROM"  .$table;
    //$result = mysqli_query($conn, $query);

    //$columCount = mysqli_num_fields($result);


    for ($i = 0; $i < $num_fields; $i ++) {
        while ($row = mysqli_fetch_row($result)) {
            $return .= 'INSERT INTO' .$table.' VALUES(';
                for ($j = 0; $j < $num_fields; $j ++) {
                    $row[$j] = addslashes($row[$j]);
            
                    if (isset($row[$j])) {
                        $return .= '"' . $row[$j] . '"';
                    } else {
                        $return .= '""';
                    }
                    if ($j < $num_fields - 1) {
                        $return .= ',';
                    }
                }
            $return .= ");\n";
        }
    }
    $sqlScript .= "\n\n\n"; 
        
}

//spremanje sadrzaja varijable u backup datoteku

$handle = fopen('backup.sql', 'w+');
fwrite($handle, $return);
fclose($handle);
echo "Uspjesna pohrana";

if(!empty($sqlScript)){

    $backup_file_name = $database_name . '_backup_' . time() . '.sql';
    $fileHandler = fopen($backup_file_name, 'w+');
    $number_of_lines = fwrite($fileHandler, $sqlScript);
    fclose($fileHandler);


    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($backup_file_name));
    ob_clean();
    flush();
    readfile($backup_file_name);
    exec('rm ' . $backup_file_name); 
}


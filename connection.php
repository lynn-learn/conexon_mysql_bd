
<?php



$host = "localhost";
$username = "root";
$password = "";
$dbname = "select_info";
$conn = new mysqli($host, $username, $password, $dbname);

/* comprobar la conexión */
if ($conn->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}


$sql='select * from select_tab';
$result = $conn->query($sql);
if ($result) {
    while($row = $result->fetch_row()){
        print_r($row);
    }
}else{
   echo 'error query';
}

?>
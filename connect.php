<?php
$host = "interchange.proxy.rlwy.net";   
$port = 35489;                           
$user = "root";                          
$pass = "QMSOUrLUwjfvkEqLHXIGKnZGulTDZxrm"; 
$db   = "railway";                       

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("❌ FALLO LA CONEXIÓN DE DB: " . $conn->connect_error);
}

?>

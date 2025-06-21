<?php

$host="localhost";
$user="root";
$pass="Zonagrone123,";
$db="login";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "FALLO LA CONECCION DE DB".$conn->connect_error;
}
?>
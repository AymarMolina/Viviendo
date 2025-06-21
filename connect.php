<?php
$host = "shinkansen.proxy.rlwy.net"; // host de Railway
$port = 22711;                        // puerto que Railway te dio
$user = "root";                       // usuario
$pass = "zRmMwVTqWXQgkylmktcztzfFXZiuTekG"; // contraseña
$db   = "railway";                   // nombre de la base de datos

// Crear la conexión
$conn = new mysqli($host, $user, $pass, $db, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("FALLO LA CONEXIÓN DE DB: " . $conn->connect_error);
} else {
    echo "✅ Conexión exitosa a la base de datos de Railway.";
}
?>

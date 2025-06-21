<?php
$host = "gondola.proxy.rlwy.net";    // Host de Railway
$port = 58105;                        // Puerto de Railway
$user = "root";                       // Usuario de Railway
$pass = "tZzxiqJdpRSCyBvzwmZIqOaorcHtpYdi"; // Contraseña
$db   = "railway";                   // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($host, $user, $pass, $db, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("❌ FALLO LA CONEXIÓN DE DB: " . $conn->connect_error);
}

// Si quieres ver si funciona, descomenta la siguiente línea:
// echo "✅ Conexión exitosa a la base de datos de Railway.";
?>

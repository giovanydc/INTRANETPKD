<?php
$servername = "localhost";  // o la IP del servidor
$username   = "root";       // tu usuario de MySQL
$password   = "";           // tu contraseña
$database   = "intranetpkd";   // la base de datos que creaste

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>

<?php
// db.php
$host = '127.0.0.1';
$db   = 'intranetpkd';
$user = 'root';
$pass = ''; // en XAMPP no tiene contraseña por defecto
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $conn = new mysqli($host, $user, $pass, $db);
} catch (Exception $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>


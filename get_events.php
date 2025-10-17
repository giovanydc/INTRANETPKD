<?php
header('Content-Type: application/json');

$host = "localhost";
$user = "root";
$pass = "";
$db = "intranetpkd";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die(json_encode([]));
}

// Ahora incluimos la columna 'foto'
$result = $conn->query("SELECT fecha, titulo, tipo, foto FROM eventos_calendario");
$events = [];
while($row = $result->fetch_assoc()){
    $events[] = $row;
}

// JSON con codificación UTF-8 para que se vea "cumpleaños" correctamente
echo json_encode($events, JSON_UNESCAPED_UNICODE);
$conn->close();
?>



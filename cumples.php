<?php
$conexion = new mysqli('localhost','root','','tu_basedatos');

$sql = "SELECT id, fecha, titulo, tipo, foto FROM eventos_calendario";
$result = $conexion->query($sql);

$eventos = [];
while($row = $result->fetch_assoc()){
    $eventos[] = $row;
}

echo json_encode($eventos);
?>

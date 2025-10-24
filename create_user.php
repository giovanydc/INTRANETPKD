<?php
require_once 'db.php';

// Datos del primer usuario (cámbialos a lo que quieras)
$username = 'admin';
$password_plain = 'Pacad@!'; // CONTRASEÑA con la que vas a entrar
$email = 'admin@empresa.com';

// Encripta la contraseña
$hash = password_hash($password_plain, PASSWORD_DEFAULT);

// Inserta en la tabla users
$stmt = $pdo->prepare("INSERT INTO users (username, password, email, role) VALUES (?, ?, ?, ?)");
try {
  $stmt->execute([$username, $hash, $email, 'admin']);
  echo "Usuario creado con éxito.";
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}

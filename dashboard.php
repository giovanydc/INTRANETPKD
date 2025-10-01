<?php
// dashboard.php
session_start();
if (empty($_SESSION['user_id'])) {
    header('Location: index.html');
    exit;
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Dashboard</title></head>
<body>
  <h1>Bienvenido, <?= htmlspecialchars($_SESSION['username']) ?></h1>
  <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>

<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header('Location: index.php'); 
    exit;
}

// Datos de ejemplo dinámicos
$totalUsuarios = 125;
$reportesHoy = 32;
$pendientes = 7;
$nuevosIngresos = 5;
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Dashboard - Intranet PKD</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Intranet PKD</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Usuarios</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Reportes</a></li>
      </ul>
      <span class="navbar-text">
        <?= htmlspecialchars($_SESSION['username']) ?> | <a href="logout.php" class="text-white">Cerrar sesión</a>
      </span>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <h2 class="mb-4">Bienvenido, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
  <div class="row g-4">
    <!-- Tarjeta Usuarios -->
    <div class="col-md-3">
      <div class="card text-center bg-usuarios p-4">
        <i class="bi bi-people-fill"></i>
        <h5>Total Usuarios</h5>
        <h3><?= $totalUsuarios ?></h3>
      </div>
    </div>
    <!-- Tarjeta Reportes -->
    <div class="col-md-3">
      <div class="card text-center bg-reportes p-4">
        <i class="bi bi-bar-chart-fill"></i>
        <h5>Reportes Hoy</h5>
        <h3><?= $reportesHoy ?></h3>
      </div>
    </div>
    <!-- Tarjeta Pendientes -->
    <div class="col-md-3">
      <div class="card text-center bg-pendientes p-4">
        <i class="bi bi-clock-fill"></i>
        <h5>Pendientes</h5>
        <h3><?= $pendientes ?></h3>
      </div>
    </div>
    <!-- Tarjeta Nuevos Ingresos -->
    <div class="col-md-3">
      <div class="card text-center bg-nuevos p-4">
        <i class="bi bi-person-plus-fill"></i>
        <h5>Nuevos Ingresos</h5>
        <h3><?= $nuevosIngresos ?></h3>
      </div>
    </div>
  </div>

  <!-- Panel de acciones recientes -->
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card p-4" style="color:#213877;">
        <h5>Últimas acciones</h5>
        <ul>
          <li>Usuario Juan Pérez agregado el 17/09/2025</li>
          <li>Reporte financiero generado por Ana López</li>
          <li>Configuración del sistema actualizada</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

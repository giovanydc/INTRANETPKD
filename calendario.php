<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header('Location: index.php'); 
    exit;
}
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>INTRANET | PACADA</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/indexusuarios.css">
  
</head>
<body>
<?php include 'header.php'; ?> 
<main>
<!-- SECCIÓN CALENDARIO -->
<section class="py-5" style="margin-top: 80px; background-color: #f5f6fa;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color:#213877;">Calendario</h2>
      <p class="text-muted">Mantente al día con los eventos importantes de nuestra financiera</p>
    </div>
    <div class="row g-4">
      <!-- Calendario Laboral -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0">
          <div class="card-body text-center">
            <i class="bi bi-calendar-check-fill display-4 mb-3" style="color:#213877;"></i>
            <h5 class="card-title fw-bold">Calendario Laboral</h5>
            <p class="card-text text-muted">Conoce los días festivos y jornadas laborales importantes.</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>
      <!-- Calendario Cumpleaños -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0">
          <div class="card-body text-center">
            <i class="bi bi-gift-fill display-4 mb-3" style="color:#ff6b6b;"></i>
            <h5 class="card-title fw-bold">Calendario Cumpleaños</h5>
            <p class="card-text text-muted">Celebra los cumpleaños de todos los miembros de la financiera.</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>
      <!-- Capacitaciones -->
      <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0">
          <div class="card-body text-center">
            <i class="bi bi-people-fill display-4 mb-3" style="color:#4bcffa;"></i>
            <h5 class="card-title fw-bold">Capacitaciones</h5>
            <p class="card-text text-muted">Consulta fechas y horarios de todas las capacitaciones internas.</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
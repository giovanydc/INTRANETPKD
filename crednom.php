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
<!-- HERO SECTION - CRÉDITO DE NÓMINA -->
<section class="text-center py-5" style="background-color: #213877; color: #fff;">
  <div class="container-fluid">
    <!-- Ícono -->
    <i class="bi bi-wallet2 display-4 mb-3" style="font-size: 3rem; color: #C7D744;"></i>
    
    <!-- Título -->
    <h1 class="display-4 fw-bold text-uppercase mt-3">Crédito de Nómina</h1>
  </div>
</section>
<img src="img/pfnomina2.png" class="img-fluid w-100" alt="Crédito de Nómina">
</main>
<?php include 'footer.php'; ?> 
<?php include 'iralinicio.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
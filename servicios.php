<?php
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
<?php $activePage = 'servicios'; ?>
<?php include 'header.php'; ?>
<main>
<!-- HERO CON VIDEO Y GRADIENTE ANIMADO -->
<section class="hero position-relative d-flex align-items-center text-center text-white" style="min-height: 80vh; overflow: hidden;">
  
  <!-- Video de fondo -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; top:0; left:0; z-index:-2;">
    <source src="video/finance.mp4" type="video/mp4">
    Tu navegador no soporta videos en HTML5.
  </video>

  <!-- Overlay con gradiente animado -->
  <div class="overlay position-absolute w-100 h-100" style="top:0; left:0; z-index:-1;"></div>

  <!-- Contenido hero -->
  <div class="container position-relative p-4 rounded-4" 
       style="z-index:1; background: rgba(0,0,0,0.45); backdrop-filter: blur(6px); max-width: 850px;">
    
    <h1 class="fw-bold display-4 mb-4" 
        style="color: #C7D744; text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">
      SERVICIOS FINANCIEROS
    </h1>
    
    <p class="lead mb-4" 
       style="text-shadow: 1px 1px 5px rgba(0,0,0,0.7);">
      Impulsa tu crecimiento con soluciones financieras modernas, rápidas y seguras.  
      Descubre cómo nuestros productos se adaptan a tus necesidades personales y empresariales.
    </p>
    
    <a href="#servicios" class="btn btn-lg fw-bold px-5 py-3" 
       style="background:#C7D744; color:#213877; border:none; border-radius:50px; box-shadow: 0px 4px 12px rgba(0,0,0,0.5); transition: all 0.3s ease;">
      Conoce más
    </a>
  </div>
</section>


<!-- ESTILOS EXTRA -->
<style>
  /* Gradiente animado */
  .hero .overlay {
    background: linear-gradient(-45deg, rgba(33,56,119,0.8), rgba(199,215,68,0.5), rgba(33,56,119,0.8));
    background-size: 400% 400%;
    animation: gradientMove 12s ease infinite;
  }

  @keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }
</style>


<!-- SERVICIOS -->
<section class="py-5" style="background-color: #f9f9f9;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color:#213877;">Nuestros Servicios</h2>
      <p class="text-muted">Descubre las opciones financieras que tenemos para ti</p>
    </div>

    <div class="row g-4">
      <!-- Crédito de Liquidez -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-center shadow border-0 card-hover"
            onclick="window.location.href='credliquid.php';" 
       style="cursor:pointer;">
          <div class="card-body">
            <i class="bi bi-cash-stack display-4 mb-3" style="color:#C7D744;"></i>
            <h5 class="card-title fw-bold" style="color:#213877;">Crédito de Liquidez</h5>
            <p class="card-text">Obtén liquidez inmediata con tasas competitivas para cubrir tus necesidades personales o empresariales.</p>
          </div>
        </div>
      </div>

      <!-- Crédito de Nómina -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-center shadow border-0 card-hover"
        onclick="window.location.href='crednom.php';" 
       style="cursor:pointer;">
          <div class="card-body">
            <i class="bi bi-wallet2 display-4 mb-3" style="color:#C7D744;"></i>
            <h5 class="card-title fw-bold" style="color:#213877;">Crédito de Nómina</h5>
            <p class="card-text">Accede a préstamos fáciles y rápidos descontados directamente de tu nómina.</p>
          </div>
        </div>
      </div>

      <!-- Préstamo de Auto -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-center shadow border-0 card-hover"
        onclick="window.location.href='credauto.php';" 
       style="cursor:pointer;">
          <div class="card-body">
            <i class="bi bi-car-front-fill display-4 mb-3" style="color:#C7D744;"></i>
            <h5 class="card-title fw-bold" style="color:#213877;">Crédito de Auto</h5>
            <p class="card-text">Financia tu vehículo con planes accesibles y flexibles de pago.</p>
          </div>
        </div>
      </div>

      <!-- Crédito Capital de Trabajo -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-center shadow border-0 card-hover"
        onclick="window.location.href='credcapt.php';" 
       style="cursor:pointer;">
          <div class="card-body">
            <i class="bi bi-building display-4 mb-3" style="color:#C7D744;"></i>
            <h5 class="card-title fw-bold" style="color:#213877;">Crédito para Capital de Trabajo</h5>
            <p class="card-text">Impulsa el crecimiento de tu negocio con financiamiento para operación y expansión.</p>
          </div>
        </div>
      </div>

      <!-- Factoraje Financiero -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-center shadow border-0 card-hover"
        onclick="window.location.href='credff.php';" 
       style="cursor:pointer;">
          <div class="card-body">
            <i class="bi bi-graph-up-arrow display-4 mb-3" style="color:#C7D744;"></i>
            <h5 class="card-title fw-bold" style="color:#213877;">Factoraje Financiero</h5>
            <p class="card-text">Convierte tus cuentas por cobrar en liquidez inmediata y fortalece tu flujo de efectivo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Estilos para efecto hover -->
<style>
  .card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 15px; /* esquinas modernas */
  }
  .card-hover:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
  }
</style>


</main>
 
  <!--FOOTER-->
<?php include 'footer.php'; ?>
<?php include 'iralinicio.php'; ?>
<!-- Script para detener el video al cerrar el modal -->
<script>
  const videoModal = document.getElementById('videoModal');
  const video = document.getElementById('videoNosotros');

  videoModal.addEventListener('hidden.bs.modal', () => {
    video.pause();        // Pausa el video
    video.currentTime = 0; // Reinicia al inicio
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
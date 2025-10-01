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
<header>
<!-- HTML -->
 <!-- FRANJA AZUL -->
<!-- NAV FIJO -->
<div class="navegadorflot">
  <div class="franja-azul"></div>
  
  <div class="logo-container d-flex align-items-center justify-content-between px-3">
      <img class="logopacada" src="img/Logo Pacada.png" alt="Logo Pacada">
      <div class="divsesion">
        <span class="navbar-text text-black">
          Hola de nuevo <strong><?= htmlspecialchars($_SESSION['username']) ?></strong> |
          <a href="logout.php" class="text-black text-decoration-underline">Cerrar sesión</a>
        </span>
      </div>
  </div>
  
  <div class="franja-azul2"></div>
  
  <nav class="navbar navbar-expand-lg navbar-dark navbar-pkd">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">INTRANET | PACADA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPKD">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarPKD">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="iniciopkd.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="nosotros.php">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link active" href="#">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Calendario</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Capital Humano</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Areas</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Noticias</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Buzón</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Educación Financiera</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="franja-azul"></div>
</div>
</header>

<main>
<!-- HERO CON VIDEO Y GRADIENTE ANIMADO -->
<section class="hero position-relative d-flex align-items-center text-center text-white" style="min-height: 80vh; overflow: hidden;">
  
  <!-- Video de fondo -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100" style="object-fit: cover; top:0; left:0; z-index:-2;">
    <source src="INTRANETPKD/video/finance.mp4" type="video/mp4">
    Tu navegador no soporta videos en HTML5.
  </video>

  <!-- Overlay con gradiente animado -->
  <div class="overlay position-absolute w-100 h-100" style="top:0; left:0; z-index:-1;"></div>

  <!-- Contenido hero -->
  <div class="container position-relative" style="z-index:1;">
    <h1 class="fw-bold display-4" style="color: #C7D744;">SERVICIOS FINANCIEROS</h1>
    <p class="lead mt-3 mb-4" style="max-width: 700px; margin: auto;">
      Impulsa tu crecimiento con soluciones financieras modernas, rápidas y seguras.  
      Descubre cómo nuestros productos se adaptan a tus necesidades personales y empresariales.
    </p>
    <a href="#servicios" class="btn btn-lg fw-bold" style="background:#C7D744; color:#213877; border:none;">
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
        <div class="card h-100 text-center shadow border-0">
          <div class="card-body">
            <i class="bi bi-cash-stack display-4 mb-3" style="color:#C7D744;"></i>
            <h5 class="card-title fw-bold" style="color:#213877;">Crédito de Liquidez</h5>
            <p class="card-text">Obtén liquidez inmediata con tasas competitivas para cubrir tus necesidades personales o empresariales.</p>
          </div>
        </div>
      </div>

      <!-- Crédito de Nómina -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-center shadow border-0">
          <div class="card-body">
            <i class="bi bi-wallet2 display-4 mb-3" style="color:#C7D744;"></i>
            <h5 class="card-title fw-bold" style="color:#213877;">Crédito de Nómina</h5>
            <p class="card-text">Accede a préstamos fáciles y rápidos descontados directamente de tu nómina.</p>
          </div>
        </div>
      </div>

      <!-- Préstamo de Auto -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-center shadow border-0">
          <div class="card-body">
            <i class="bi bi-car-front-fill display-4 mb-3" style="color:#C7D744;"></i>
            <h5 class="card-title fw-bold" style="color:#213877;">Préstamo de Auto</h5>
            <p class="card-text">Financia tu vehículo con planes accesibles y flexibles de pago.</p>
          </div>
        </div>
      </div>

      <!-- Capital de Trabajo -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-center shadow border-0">
          <div class="card-body">
            <i class="bi bi-building display-4 mb-3" style="color:#C7D744;"></i>
            <h5 class="card-title fw-bold" style="color:#213877;">Capital de Trabajo</h5>
            <p class="card-text">Impulsa el crecimiento de tu negocio con financiamiento para operación y expansión.</p>
          </div>
        </div>
      </div>

      <!-- Factoraje Financiero -->
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 text-center shadow border-0">
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

</main>
 
<!-- FOOTER MODERNO CON COLORES CORPORATIVOS - ESTILOS SEPARADOS -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- Logo y descripción -->
    <div class="col-md-4 mb-4 text-center">
  <img src="img/Logo Pacada blanco.png" alt="" class="img-fluid d-block mx-auto">
</div>

  <div class="col-md-2 mb-4">
  <h5 class="footer-title">Links</h5>
  <div class="row row-cols-2 row-cols-md-1">
    <div class="col"><a href="#" class="footer-link">Inicio</a></div>
    <div class="col"><a href="#" class="footer-link">Servicios</a></div>
    <div class="col"><a href="#" class="footer-link">Nosotros</a></div>
    <div class="col"><a href="#" class="footer-link">Calendario</a></div>
    <div class="col"><a href="#" class="footer-link">Capital Humano</a></div>
    <div class="col"><a href="#" class="footer-link">Áreas</a></div>
    <div class="col"><a href="#" class="footer-link">Noticias</a></div>
    <div class="col"><a href="#" class="footer-link">Buzón</a></div>
    <div class="col"><a href="#" class="footer-link">Educación Financiera</a></div>
  </div>
</div>


      <!-- Contacto -->
      <div class="col-md-3 mb-4">
        <h5 class="footer-title">Contacto Soporte TI PACADA</h5>
        <p class="footer-contact"><i class="bi bi-envelope-fill icon"></i>soporte@pacada.com.mx</p>
        <p class="footer-contact"><i class="bi bi-telephone-fill icon"></i>Ext 2060 (Atención Ing. Adolfo Cortes)</p>
        <p class="footer-contact"><i class="bi bi-telephone-fill icon"></i>Ext 2069 (Atención Lic. Giovany DC)</p>
        <p class="footer-contact"><i class="bi bi-geo-alt-fill icon"></i>Ciudad de México, México</p>
      </div>

      <!-- Redes sociales -->
      <div class="col-md-3 mb-4">
        <h5 class="footer-title">Síguenos</h5>
        <div class="d-flex gap-3 mt-2">
          <a href="#" class="social-btn"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-btn"><i class="bi bi-twitter"></i></a>
          <a href="#" class="social-btn"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>

    <hr class="footer-hr">

    <!-- Copyright -->
    <div class="text-center">
      <p class="footer-copy">&copy; 2025 PACADA. Todos los derechos reservados.</p>
    </div>
  </div>
</footer>
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
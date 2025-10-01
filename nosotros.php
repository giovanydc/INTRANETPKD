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
          <li class="nav-item"><a class="nav-link active" href="#">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
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
  <!-- SECCIÓN NOSOTROS -->
<section id="nosotros" class="py-5" style="background-color:#f8f9fa;">
  <div class="container text-center">

    <!-- Imagen moderna completa -->
    <div class="position-relative mb-5 rounded shadow-lg overflow-hidden">
      <img src="img/people.jpg" alt="Nuestra Empresa"
           class="img-fluid w-100" style="max-height:400px; object-fit:contain;">
      <!-- Overlay degradado -->
      <div style="
           position:absolute;
           top:0; left:0; width:100%; height:100%;
           background: linear-gradient(to bottom, rgba(33,56,119,0.4), rgba(199,215,68,0.3));
      "></div>
    </div>

    <!-- Título y descripción -->
    <h2 class="fw-bold mb-3" style="color:#213877;">NOSOTROS</h2>
    <p class="lead mb-4 text-muted">
      Somos una Sociedad Financiera con más de 11 años de experiencia. 
      Estamos comprometidos con promover el bienestar, crecimiento y fortalecimiento económico de nuestros clientes.
    </p>

    <!-- Botón de Video Local -->
    <button type="button" class="btn btn-outline-light fw-bold mb-5" 
            data-bs-toggle="modal" data-bs-target="#videoModal"
            style="color:#213877; border:2px solid #C7D744;">
      🎥 Ver Video Institucional
    </button>

    <!-- Row de Misión, Visión, Valores -->
    <div class="row g-4">
      <!-- MISIÓN -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 card-hover">
          <div class="card-body text-center">
            <div class="mb-3">
              <i class="bi bi-bullseye fs-1" style="color:#C7D744;"></i>
            </div>
            <h5 class="card-title fw-bold" style="color:#213877;">Nuestra Misión</h5>
            <p class="card-text text-muted">
              Brindar soluciones de financiamiento que impulsen el bienestar de nuestros clientes, 
              mediante un portafolio de productos flexible adaptado a sus necesidades.
            </p>
          </div>
        </div>
      </div>

      <!-- VISIÓN -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 card-hover">
          <div class="card-body text-center">
            <div class="mb-3">
              <i class="bi bi-eye fs-1" style="color:#C7D744;"></i>
            </div>
            <h5 class="card-title fw-bold" style="color:#213877;">Nuestra Visión</h5>
            <p class="card-text text-muted">
              Ser un referente en el sector financiero con liderazgo en los servicios, 
              caracterizándonos por fomentar e implementar una experiencia única, 
              fortaleciendo las relaciones y el compromiso con nuestros clientes.
            </p>
          </div>
        </div>
      </div>

      <!-- VALORES -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 card-hover">
          <div class="card-body text-center">
            <div class="mb-3">
              <i class="bi bi-heart fs-1" style="color:#C7D744;"></i>
            </div>
            <h5 class="card-title fw-bold" style="color:#213877;">Nuestros Valores</h5>
            <p class="card-text text-muted">
              Honestidad, compromiso, seguridad, transparencia, confiabilidad, disponibilidad.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal Video Local -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark">
      <div class="modal-body p-0">
        <video id="videoNosotros" controls style="width:100%; height:auto;">
          <source src="video/nosotros25.mp4" type="video/mp4">
          Tu navegador no soporta la reproducción de video.
        </video>
      </div>
    </div>
  </div>
</div>
</main>

<!-- FOOTER MODERNO CON COLORES CORPORATIVOS - ESTILOS SEPARADOS -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- Logo y descripción -->
      <div class="col-md-4 mb-4">
        <h4 class="footer-title">MiEmpresa</h4>
        <p class="footer-text">Soluciones innovadoras para tu negocio. Conectando personas y tecnología de manera profesional.</p>
      </div>

      <!-- Links rápidos -->
      <div class="col-md-2 mb-4">
        <h5 class="footer-title">Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="footer-link">Inicio</a></li>
          <li><a href="#" class="footer-link">Servicios</a></li>
          <li><a href="#" class="footer-link">Nosotros</a></li>
          <li><a href="#" class="footer-link">Contacto</a></li>
        </ul>
      </div>

      <!-- Contacto -->
      <div class="col-md-3 mb-4">
        <h5 class="footer-title">Contacto</h5>
        <p class="footer-contact"><i class="bi bi-envelope-fill icon"></i>info@miempresa.com</p>
        <p class="footer-contact"><i class="bi bi-telephone-fill icon"></i>+52 55 1234 5678</p>
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
      <p class="footer-copy">&copy; 2025 MiEmpresa. Todos los derechos reservados.</p>
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
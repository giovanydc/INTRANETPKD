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
<?php $activePage = 'nosotros'; ?>
<?php include 'header.php'; ?> 
 
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
<script src="js/moviles.js"></script>
</body>
</html>
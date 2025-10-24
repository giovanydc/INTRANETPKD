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
  <!-- ESTILO MEJORADO -->
<style>
  /* Efecto hover para tarjetas */
  .hover-effect:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
  }

  /* Suavizar hover de la imagen */
  #nosotros img:hover {
    transform: scale(1.03);
  }

  /* Responsivo: ajustar texto en móviles */
  @media (max-width:767px){
    #nosotros h2 {
      font-size:2rem;
    }
    #nosotros p {
      font-size:1rem;
    }
  }
</style>
</head>

<body>
<?php $activePage = 'nosotros'; ?>
<?php include 'header.php'; ?> 
 
<main>
<!-- SECCIÓN NUESTRA HISTORIA -->
<section id="nosotros" class="py-5" style="background-color:#f3f4f6;">
  <div class="container mt-5">
    <div class="row align-items-center">
      
      <!-- Imagen a la izquierda -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="img/Logo.png" alt="Nuestra Historia" 
             class="img-fluid rounded-4 shadow-sm" 
             style="width:100%; object-fit:cover; transition: transform 0.3s ease;">
      </div>
      
      <!-- Texto a la derecha -->
      <div class="col-md-6">
        <h2 class="fw-bold mb-3" style="color:#213877;">Nuestra Historia</h2>
        <p class="lead mb-4" style="color:#555; line-height:1.7;">
          Somos una Sociedad Financiera con más de 11 años de experiencia. 
          Estamos comprometidos con promover el bienestar, crecimiento y fortalecimiento económico de nuestros clientes.
        </p>
        <!-- Botón que abre el modal -->
        <button type="button" class="btn btn-lg fw-bold px-4 py-2"
                style="background-color:#C7D744; color:#213877; border:none; transition:0.3s;"
                data-bs-toggle="modal" data-bs-target="#videoModal">
          Conócenos
        </button>
      </div>
      
    </div>
  </div>
</section>
<!-- Modal de Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0">
      <div class="modal-body p-0">
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
        <video id="nosotrosVideo" class="w-100 rounded-4" controls>
          <source src="video/nosotros25.mp4" type="video/mp4">
          Tu navegador no soporta la reproducción de video.
        </video>
      </div>
    </div>
  </div>
</div>

<!-- SECCIÓN MISIÓN, VISIÓN Y VALORES -->
<section class="py-5" id="contacto"
         style="background: linear-gradient(180deg, #f3f4f6 0%, #ffffff 100%);">
  <div class="container">
    <div class="row g-4 mt-4 text-center">
      
      <!-- MISIÓN -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4 hover-effect" style="transition: transform 0.3s ease;">
          <div class="mb-3"><i class="bi bi-bullseye fs-1" style="color:#C7D744;"></i></div>
          <h5 class="fw-bold mb-2" style="color:#213877;">Nuestra Misión</h5>
          <p class="text-muted">
            Brindar soluciones de financiamiento que impulsen el bienestar de nuestros clientes, 
            mediante un portafolio de productos flexible adaptado a sus necesidades.
          </p>
        </div>
      </div>

      <!-- VISIÓN -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4 hover-effect" style="transition: transform 0.3s ease;">
          <div class="mb-3"><i class="bi bi-eye fs-1" style="color:#C7D744;"></i></div>
          <h5 class="fw-bold mb-2" style="color:#213877;">Nuestra Visión</h5>
          <p class="text-muted">
            Ser un referente en el sector financiero con liderazgo en los servicios, 
            caracterizándonos por fomentar e implementar una experiencia única, 
            fortaleciendo las relaciones y el compromiso con nuestros clientes.
          </p>
        </div>
      </div>

      <!-- VALORES -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4 hover-effect" style="transition: transform 0.3s ease;">
          <div class="mb-3"><i class="bi bi-heart fs-1" style="color:#C7D744;"></i></div>
          <h5 class="fw-bold mb-2" style="color:#213877;">Nuestros Valores</h5>
          <ul class="list-unstyled text-muted">
            <li>✔ Honestidad</li>
            <li>✔ Compromiso</li>
            <li>✔ Seguridad</li>
            <li>✔ Transparencia</li>
            <li>✔ Confiabilidad</li>
            <li>✔ Disponibilidad</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
 
  <!--FOOTER-->
<?php include 'footer.php'; ?>
<?php include 'iralinicio.php'; ?>
<!-- Script para detener el video al cerrar el modal -->
<!-- Script para detener video al cerrar modal -->
<script>
  const videoModal = document.getElementById('videoModal');
  const video = document.getElementById('nosotrosVideo');

  videoModal.addEventListener('hidden.bs.modal', () => {
    video.pause();
    video.currentTime = 0; // Reinicia el video al cerrar
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/moviles.js"></script>
</body>
</html>
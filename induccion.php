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
<style>
:root {
  --principal: #C7D744;
  --secundario: #213877;
}

/* Animación hover en cards */
.card-hover {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card-hover:hover {
  transform: translateY(-10px);
  box-shadow: 0 1rem 2rem rgba(0,0,0,0.2);
}

/* Fade Scroll Animation */
.fade-scroll {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 1s ease, transform 1s ease;
}
.fade-scroll.visible {
  opacity: 1;
  transform: translateY(0);
}
</style>
</head>
<body>
<?php include 'header.php'; ?>
<main>
<!-- Sección Inducción -->
<section class="py-5 bg-light" style="padding-top:100px;">
  <div class="container">
    <div class="row align-items-center">

      <!-- Imagen con efecto fade -->
      <div class="col-lg-6 mb-4 mt-4 mb-lg-0">
        <img src="img/peopleshak.jpg" alt="Inducción" class="img-fluid rounded shadow fade-scroll">
      </div>

      <!-- Texto -->
      <div class="col-lg-6 fade-scroll">
        <h2 class="fw-bold mb-3" style="color:#C7D744;">Inducción PACADA</h2>
        <p class="lead text-secondary">
          Bienvenido a nuestro programa de inducción. Aquí conocerás las mejores prácticas, 
          procesos y herramientas para integrarte de manera efectiva a nuestra organización. 
          Nuestro enfoque combina profesionalismo con un estilo moderno y financiero.
        </p>
      </div>
    </div>

    <!-- Cards -->
    <div class="row g-4 justify-content-center mt-5">

      <!-- Card 1 -->
      <div class="col-md-6 col-lg-4 fade-scroll">
        <div class="card h-100 shadow-sm border-0 rounded-4 card-hover">
          <div class="card-body text-center">
            <i class="bi bi-file-text-fill display-4 mb-3" style="color:#C7D744;"></i>
            <h5 class="card-title fw-bold" style="color:#213877;">Reglamento Interno</h5>
            <p class="card-text text-secondary">Consulta las normas y políticas internas para un desempeño profesional y seguro.</p>
            <a href="docs/Reglamento_interno.pdf" class="btn" target="_blank" style="background-color:#C7D744; color:#213877;">Ver más</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-4 fade-scroll">
        <div class="card h-100 shadow-sm border-0 rounded-4 card-hover">
          <div class="card-body text-center">
            <i class="bi bi-clock-fill display-4 mb-3" style="color:#C7D744;"></i>
            <h5 class="card-title fw-bold" style="color:#213877;">Uso del Reloj Checador</h5>
            <p class="card-text text-secondary">Aprende cómo registrar tu asistencia correctamente y optimizar tu tiempo laboral.</p>
            <a href="docs/rc.pdf" class="btn" target="_blank" style="background-color:#C7D744; color:#213877;">Ver más</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
  <!--FOOTER-->
<?php include 'footer.php'; ?>
<?php include 'iralinicio.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const elements = document.querySelectorAll('.fade-scroll');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  elements.forEach(el => observer.observe(el));
});
</script>
</body>
</html>
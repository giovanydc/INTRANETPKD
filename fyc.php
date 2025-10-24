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
  /* Efecto hover para cada card */
  .card {
    transition: all 0.3s ease;
  }

  .card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(33, 56, 119, 0.3);
  }

  /* Efecto para la imagen */
  .card img {
    transition: transform 0.4s ease;
  }

  .card:hover img {
    transform: scale(1.05);
  }

  /* Botón con efecto al pasar el cursor */
  .card .btn:hover {
    background-color: #213877 !important;
    color: #fff !important;
    transition: all 0.3s ease;
  }
</style>
</head>
<body>
<?php include 'header.php'; ?>
<main>
<!-- Sección Principal - Formatos PACADA -->
<section class="py-5" style="background-color: #f8f9fa;">
  <div class="container text-center mt-5">
    <h2 class="fw-bold mb-5" style="color: #213877;">
      Formatos <span style="color: #C7D744;">PACADA</span>
    </h2>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0 shadow-lg rounded-4 h-100">
          <img src="img/comision.jpg" class="card-img-top" alt="Formato 1">
          <div class="card-body">
            <h5 class="card-title fw-bold" style="color: #213877;">Memorandum de comisión</h5>
            <p class="card-text text-muted">
              Formato para tramitar solicitudes de vacaciones dentro del área de Capital Humano.
            </p>
            <a href="docs/comision.pdf" class="btn fw-semibold" target="_blank" style="background-color: #C7D744; color: #213877; border: none;">
              Descargar
            </a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0 shadow-lg rounded-4 h-100">
          <img src="img/omision.jpg" class="card-img-top" alt="Formato 2">
          <div class="card-body">
            <h5 class="card-title fw-bold" style="color: #213877;">Memorandum de omisión</h5>
            <p class="card-text text-muted">
              Formato financiero para solicitar reembolsos de gastos comprobables.
            </p>
            <a href="docs/omision.pdf" class="btn fw-semibold" target="_blank" style="background-color: #C7D744; color: #213877; border: none;">
              Descargar
            </a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0 shadow-lg rounded-4 h-100">
          <img src="img/permiso.jpg" class="card-img-top" alt="Formato 3" height="280px">
          <div class="card-body">
            <h5 class="card-title fw-bold" style="color: #213877;">Solicitud de permiso</h5>
            <p class="card-text text-muted">
              Documento para realizar solicitudes de compra o adquisición de insumos.
            </p>
            <a href="docs/permiso.pdf" class="btn fw-semibold" target="_blank" style="background-color: #C7D744; color: #213877; border: none;">
              Descargar
            </a>
          </div>
        </div>
      </div>
       <!-- Card 4 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0 shadow-lg rounded-4 h-100">
          <img src="img/plantilla.png" class="card-img-top" alt="Formato 3" height="280px">
          <div class="card-body">
            <h5 class="card-title fw-bold" style="color: #213877;">Plantilla para presentación</h5>
            <p class="card-text text-muted">
              Documento para realizar solicitudes de compra o adquisición de insumos.
            </p>
            <a href="docs/plantilla.potx" class="btn fw-semibold" target="_blank" style="background-color: #C7D744; color: #213877; border: none;">
              Descargar
            </a>
          </div>
        </div>
      </div>
        <!-- Card 5 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0 shadow-lg rounded-4 h-100">
          <img src="img/vacaciones.png" class="card-img-top" alt="Formato 3" height="280px">
          <div class="card-body">
            <h5 class="card-title fw-bold" style="color: #213877;">Memorandum de vacaciones</h5>
            <p class="card-text text-muted">
              Documento para realizar solicitudes de compra o adquisición de insumos.
            </p>
            <a href="docs/vacaciones.pdf" class="btn fw-semibold" target="_blank" style="background-color: #C7D744; color: #213877; border: none;">
              Descargar
            </a>
          </div>
        </div>
      </div>
        <!-- Card 6 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0 shadow-lg rounded-4 h-100">
          <img src="img/rembolso.png" class="card-img-top" alt="Formato 3" height="280px">
          <div class="card-body">
            <h5 class="card-title fw-bold" style="color: #213877;">Rembolso de gastos</h5>
            <p class="card-text text-muted">
              Documento para realizar solicitudes de compra o adquisición de insumos.
            </p>
            <a href="docs/Formato_Reembolso.xlsx" class="btn fw-semibold" target="_blank" style="background-color: #C7D744; color: #213877; border: none;">
              Descargar
            </a>
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
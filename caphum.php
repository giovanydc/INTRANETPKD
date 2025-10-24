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
    /* Colores corporativos */
    :root{
      --principal: #C7D744;
      --secundario: #213877;
      --fondo: #f6f8fb;
      --card-bg: #ffffff;
    }

    body {
      background-color: var(--fondo);
      font-family: "Poppins", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      color: #333;
    }

    /* ================= HERO ================= */
 .hero-capital-humano {
  position: relative;
  background: url('img/ch.jpg') center center/cover no-repeat;
  min-height: 85vh;
  color: #fff;
  overflow: hidden;
}

/* Capa de color con efecto financiero */
.hero-capital-humano .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    135deg,
    rgba(33, 56, 119, 0.9) 0%,
    rgba(199, 215, 68, 0.4) 100%
  );
  z-index: 1;
}

.hero-capital-humano .container {
  z-index: 2;
}

.hero-capital-humano h1 {
  color: var(--principal);
  letter-spacing: 2px;
}

.hero-capital-humano p {
  color: #f8f9fa;
  font-size: 1.2rem;
  max-width: 700px;
  margin: 0 auto;
}

/* Botón principal */
  /* Estilo para los botones personalizados */
  .btn.btn-humano {
    background-color: var(--principal) !important;
    color: var(--secundario) !important;
    border: none !important;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .btn.btn-humano:hover {
    background-color: var(--secundario) !important;
    color: #fff !important;
  }

  /* Opcional: para asegurar contraste y consistencia */
  .card-humano {
    background: #fff;
    border-radius: 1rem;
    padding: 1.5rem;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card-humano:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 25px rgba(33, 56, 119, 0.2);
  }

  .icono-humano {
    font-size: 2.5rem;
    color: var(--secundario);
    margin-bottom: 10px;
  }

  .card-title {
    color: var(--secundario);
    font-weight: 700;
  }

  .card-desc {
    color: #6c757d;
    font-size: 0.9rem;
  }

    
    @media (max-width: 575px) {
      .card-humano { min-height: 150px; padding: 1rem; }
      .icono-humano { font-size: 2.2rem; }
    }
  </style>
</head>
<body>
<?php $activePage = 'caphum'; ?>
<?php include 'header.php'; ?> 
<main>
 <section class="hero-capital-humano d-flex align-items-center justify-content-center text-center text-white">
  <div class="overlay"></div>
  <div class="container position-relative fade-in">
    <h1 class="display-4 fw-bold text-uppercase">Capital Humano</h1>
    <p class="lead mt-3 fw-bold">
      Potenciando el talento que impulsa nuestro crecimiento financiero y humano.
    </p>
  </div>
</section>

        
  <!-- SECCIÓN PRINCIPAL -->
  <section class="container py-5">
    <div class="text-center mb-4">
      <h2 class="section-title">Nuestras Secciones</h2>
      <div class="divider"></div>
      <p class="text-muted">Recursos, procesos y beneficios que fortalecen nuestro equipo de trabajo.</p>
    </div>

    <div class="row g-4">
      <!-- Organigrama -->
      <div class="col-6 col-md-3">
        <div class="card-humano">
          <i class="bi bi-diagram-3 icono-humano"></i>
          <h6 class="card-title">Organigrama</h6>
          <p class="card-desc">Estructura y responsables</p>
          <a href="organigrama.php" class="btn btn-humano mt-3 btn-sm">Ver más</a>
        </div>
      </div>

      <!-- Inducción -->
      <div class="col-6 col-md-3">
        <div class="card-humano">
          <i class="bi bi-person-lines-fill icono-humano"></i>
          <h6 class="card-title">Inducción</h6>
          <p class="card-desc">Onboarding y guías de ingreso</p>
          <a href="induccion.php" class="btn btn-humano mt-3 btn-sm">Ver más</a>
        </div>
      </div>

      <!-- Formatos Internos -->
      <div class="col-6 col-md-3">
        <div class="card-humano">
          <i class="bi bi-file-earmark-text icono-humano"></i>
          <h6 class="card-title">Formatos Internos</h6>
          <p class="card-desc">Plantillas y documentos útiles</p>
          <a href="fyc.php" class="btn btn-humano mt-3 btn-sm">Ver más</a>
        </div>
      </div>

      <!-- Uniformes -->
      <div class="col-6 col-md-3">
        <div class="card-humano">
          <img src="img/dry_cleaning_24dp_1F1F1F.svg" alt="Icono" width="63" height="63">
          <h6 class="card-title">Uniformes</h6>
          <p class="card-desc">Políticas y tallas disponibles</p>
          <a href="uniformes.php" class="btn btn-humano mt-3 btn-sm">Consultar</a>
        </div>
      </div>

      <!-- Eventos -->
      <div class="col-6 col-md-3">
        <div class="card-humano">
          <i class="bi bi-calendar-event icono-humano"></i>
          <h6 class="card-title">Eventos</h6>
          <p class="card-desc">Calendario corporativo</p>
          <a href="eventos.php" class="btn btn-humano mt-3 btn-sm">Ver</a>
        </div>
      </div>

      <!-- Bienestar -->
      <div class="col-6 col-md-3">
        <div class="card-humano">
          <i class="bi bi-heart-pulse icono-humano"></i>
          <h6 class="card-title">Bienestar</h6>
          <p class="card-desc">Programas de salud y actividades</p>
          <a href="bienestar.php" class="btn btn-humano mt-3 btn-sm">Saber más</a>
        </div>
      </div>

      <!-- Seguridad e Higiene -->
      <div class="col-6 col-md-3">
        <div class="card-humano">
          <i class="bi bi-shield-check icono-humano"></i>
          <h6 class="card-title">Seguridad e Higiene</h6>
          <p class="card-desc">Normas, reportes y capacitaciones</p>
          <a href="seguridad-higiene.php" class="btn btn-humano mt-3 btn-sm">Información</a>
        </div>
      </div>

      <!-- Beneficios -->
      <div class="col-6 col-md-3">
        <div class="card-humano">
          <i class="bi bi-gift icono-humano"></i>
          <h6 class="card-title">Beneficios</h6>
          <p class="card-desc">Prestaciones y convenios</p>
          <a href="beneficios.php" class="btn btn-humano mt-3 btn-sm">Explorar</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>
<?php include 'iralinicio.php'; ?> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
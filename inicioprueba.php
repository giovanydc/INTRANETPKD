<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header('Location: index.php'); 
    exit;
}

// Datos de ejemplo dinámicos
$totalUsuarios = 125;
$reportesHoy = 32;
$pendientes = 7;
$nuevosIngresos = 5;
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
<link rel="stylesheet" href="css/scinicio.css">
</head>
<body>
<!-- NAV -->
<div class="navegadorflot">
  <div class="franja-azul"></div>
  <div class="logo-container d-flex align-items-center justify-content-between px-3 py-2">
      <img class="logopacada" src="img/Logo Pacada.png" alt="Logo Pacada" style="height:50px;">
      <div class="divsesion">
        <span class="navbar-text text-dark">
          Hola de nuevo <strong><?= htmlspecialchars($_SESSION['username']) ?></strong> |
          <a href="logout.php" class="text-dark text-decoration-underline">Cerrar sesión</a>
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
          <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="nosotros.php">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Calendario</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Capital Humano</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Noticias</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Buzón</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Educación Financiera</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="franja-azul"></div>
</div>

<!-- CAROUSEL -->
<div id="carouselPKD" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/campañamayo.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="img/carruselprincipal2.jpg" class="d-block w-100" alt="Slide 2">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselPKD" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselPKD" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<!-- ACCESOS RÁPIDOS -->
<section class="container my-5">
  <h3 class="section-title text-center">Accesos Rápidos</h3>
  <div class="row g-4 text-center">
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-4">
        <i class="bi bi-calendar-check display-5 text-primary"></i>
        <h6 class="mt-3">Calendario</h6>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-4">
        <i class="bi bi-people display-5 text-success"></i>
        <h6 class="mt-3">Capital Humano</h6>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-4">
        <i class="bi bi-newspaper display-5 text-danger"></i>
        <h6 class="mt-3">Noticias</h6>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-4">
        <i class="bi bi-envelope display-5 text-warning"></i>
        <h6 class="mt-3">Buzón</h6>
      </div>
    </div>
  </div>
</section>

<!-- NOTICIAS INTERNAS -->
<section class="container my-5">
  <h3 class="section-title text-center">Últimas Noticias</h3>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <img src="img/noticia1.jpg" class="card-img-top" alt="Noticia 1">
        <div class="card-body">
          <h5 class="card-title">Nueva política interna</h5>
          <p class="card-text">Conoce las actualizaciones en la política de home office.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <img src="img/noticia2.jpg" class="card-img-top" alt="Noticia 2">
        <div class="card-body">
          <h5 class="card-title">Capacitación 2025</h5>
          <p class="card-text">Inscríbete a las capacitaciones en línea de este trimestre.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm h-100">
        <img src="img/noticia3.jpg" class="card-img-top" alt="Noticia 3">
        <div class="card-body">
          <h5 class="card-title">Reconocimiento</h5>
          <p class="card-text">Felicitamos a los colaboradores destacados de este mes.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CUMPLEAÑOS -->
<section class="container my-5">
  <h3 class="section-title text-center">Cumpleaños del Mes</h3>
  <div class="row g-4 justify-content-center">
    <div class="col-6 col-md-3">
      <div class="card shadow-sm text-center p-3">
        <i class="bi bi-gift-fill display-5 text-danger"></i>
        <h6 class="mt-2">María López</h6>
        <p class="mb-0 text-muted">05 Oct</p>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm text-center p-3">
        <i class="bi bi-gift-fill display-5 text-danger"></i>
        <h6 class="mt-2">Juan Pérez</h6>
        <p class="mb-0 text-muted">10 Oct</p>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm text-center p-3">
        <i class="bi bi-gift-fill display-5 text-danger"></i>
        <h6 class="mt-2">Ana Torres</h6>
        <p class="mb-0 text-muted">21 Oct</p>
      </div>
    </div>
  </div>
</section>

<!-- CALENDARIO CORPORATIVO -->
<section class="container my-5">
  <h3 class="section-title text-center">Calendario Corporativo</h3>
  <div class="table-responsive">
    <table class="table table-striped align-middle text-center">
      <thead class="table-primary">
        <tr>
          <th>Fecha</th>
          <th>Evento</th>
          <th>Área</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01/10/2025</td>
          <td>Junta Directiva</td>
          <td>Dirección</td>
        </tr>
        <tr>
          <td>05/10/2025</td>
          <td>Capacitación Excel</td>
          <td>Capital Humano</td>
        </tr>
        <tr>
          <td>10/10/2025</td>
          <td>Cumpleaños colaboradores</td>
          <td>Recursos Humanos</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer py-4 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h4 class="fw-bold">MiEmpresa</h4>
        <p>Soluciones financieras seguras e innovadoras para tu futuro.</p>
      </div>
      <div class="col-md-2 mb-4">
        <h5 class="fw-bold">Links</h5>
        <ul class="list-unstyled">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Nosotros</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-4">
        <h5 class="fw-bold">Contacto</h5>
        <p><i class="bi bi-envelope-fill"></i> info@miempresa.com</p>
        <p><i class="bi bi-telephone-fill"></i> +52 55 1234 5678</p>
        <p><i class="bi bi-geo-alt-fill"></i> CDMX, México</p>
      </div>
      <div class="col-md-3 mb-4">
        <h5 class="fw-bold">Síguenos</h5>
        <div class="d-flex gap-3 mt-2">
          <a href="#"><i class="bi bi-facebook fs-4"></i></a>
          <a href="#"><i class="bi bi-twitter fs-4"></i></a>
          <a href="#"><i class="bi bi-instagram fs-4"></i></a>
          <a href="#"><i class="bi bi-linkedin fs-4"></i></a>
        </div>
      </div>
    </div>
    <hr class="bg-light">
    <div class="text-center">
      <p class="mb-0">&copy; 2025 MiEmpresa. Todos los derechos reservados.</p>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


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

// ✅ Aquí incluyes la conexión y consultas los cumpleaños
include 'conexion.php';
$mesActual = date('m');
$conn->query("SET lc_time_names = 'es_ES'");
$query = "SELECT nombre, DATE_FORMAT(fecha, '%d de %M') as fecha_formateada 
          FROM cumpleanios 
          WHERE MONTH(fecha) = $mesActual";
$result = $conn->query($query);

// ✅ Calculas si hay cumpleaños
$hayCumple = $result->num_rows > 0;
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
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<!-- ✅ Aquí agregas el data-hay-cumple al body -->
<body data-hay-cumple="<?= $hayCumple ? '1' : '0' ?>">
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
          <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="nosotros.php">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
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
<!-- CAROUSEL-->
 <div id="carouselPKD" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/campañamayo.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="img/carruselprincipal2.jpg" class="d-block w-100" alt="Slide 2">
    </div>
    <!-- <div class="carousel-item">
      <img src="img/slide3.jpg" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Reportes y Estadísticas</h5>
        <p>Visualiza tus reportes de manera clara y rápida</p>
      </div>
    </div> -->
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselPKD" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselPKD" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
<!-- ACCESOS RÁPIDOS -->
<section class="container my-5">
  <h3 class="section-title text-center fw-bold" style="color: #213877;">Accesos Rápidos</h3>
  <div class="row g-4 text-center">
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-4 border-0 rounded-4 acceso-hover">
        <i class="bi bi-calendar-check display-5 icono-acceso"></i>
        <h6 class="mt-3 fw-semibold text-primary">Calendario</h6>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-4 border-0 rounded-4 acceso-hover">
        <i class="bi bi-people display-5 icono-acceso"></i>
        <h6 class="mt-3 fw-semibold text-primary">Capital Humano</h6>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-4 border-0 rounded-4 acceso-hover">
        <i class="bi bi-newspaper display-5 icono-acceso"></i>
        <h6 class="mt-3 fw-semibold text-primary">Noticias</h6>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-4 border-0 rounded-4 acceso-hover">
        <i class="bi bi-envelope display-5 icono-acceso"></i>
        <h6 class="mt-3 fw-semibold text-primary">Buzón</h6>
      </div>
    </div>
  </div>
</section>

<!-- NOTICIAS INTERNAS -->
<section class="container my-5">
  <h3 class="section-title text-center fw-bold" style="color: #213877;">Últimas Noticias</h3>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card shadow-sm h-100 border-0 rounded-4 noticia-hover">
        <img src="img/noticia1.jpg" class="card-img-top rounded-top-4" alt="Noticia 1">
        <div class="card-body">
          <h5 class="card-title fw-semibold" style="color: #213877;">Nueva política interna</h5>
          <p class="card-text text-secondary">Conoce las actualizaciones en la política de home office.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm h-100 border-0 rounded-4 noticia-hover">
        <img src="img/noticia2.jpg" class="card-img-top rounded-top-4" alt="Noticia 2">
        <div class="card-body">
          <h5 class="card-title fw-semibold" style="color: #213877;">Capacitación 2025</h5>
          <p class="card-text text-secondary">Inscríbete a las capacitaciones en línea de este trimestre.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm h-100 border-0 rounded-4 noticia-hover">
        <img src="img/noticia3.jpg" class="card-img-top rounded-top-4" alt="Noticia 3">
        <div class="card-body">
          <h5 class="card-title fw-semibold" style="color: #213877;">Reconocimiento</h5>
          <p class="card-text text-secondary">Felicitamos a los colaboradores destacados de este mes.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<div>
<!-- CUMPLEAÑOS -->
<?php include 'conexion.php'; ?>
<?php
$mesActual = date('m');
$conn->query("SET lc_time_names = 'es_ES'");
$query = "SELECT nombre, foto,extension,modulo, DATE_FORMAT(fecha, '%d de %M') as fecha_formateada 
          FROM cumpleanios 
          WHERE MONTH(fecha) = $mesActual";
$result = $conn->query($query);
?>

<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef);">
  <div class="container">
    <!-- Título -->
    <div class="text-center mb-5" data-aos="fade-down">
      <h2 class="fw-bold" style="color: #213877;">
        <i class="bi bi-gift-fill me-2" style="color: #C7D744;"></i> Cumpleaños del Mes
      </h2>
      <p class="text-secondary">¡Celebremos a nuestros compañeros! 🎉</p>
    </div>
    <!-- Grid de cumpleaños -->
<div class="row g-4 justify-content-center">
  <?php if ($result->num_rows > 0): ?>
    <?php while($row = $result->fetch_assoc()): ?>
      <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up">
        <div class="card shadow-lg border-0 h-100 rounded-4 text-center cumple-hover">
          <div class="card-body p-4 d-flex flex-column align-items-center">
            <!-- Foto del colaborador -->
            <img src="<?= $row['foto'] ?>" alt="<?= $row['nombre'] ?>" class="rounded-circle mb-3" style="width:100px; height:140px; object-fit:cover; border: 3px solid #C7D744;">
            
            <h5 class="fw-semibold text-primary-cumple"><?= $row['nombre'] ?></h5>
            <span class="badge fecha-cumple px-3 py-2 mt-2"><?= $row['fecha_formateada'] ?></span>
          </div>
           <!-- Extensión -->
  <p class="text-muted mb-1">
    <i class="bi bi-telephone-fill me-1" style="color:#213877;"></i>
    Ext: <?= $row['extension'] ?>
  </p>

  <!-- Módulo -->
  <p class="text-muted mb-2">
    <i class="bi bi-building me-1" style="color:#213877;"></i>
    <?= $row['modulo'] ?>
  </p>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <div class="col-12 text-center" data-aos="zoom-in">
      <div class="alert alert-info shadow-sm d-inline-block">
        No hay cumpleaños este mes 🎂
      </div>
    </div>
  <?php endif; ?>
</div>
  </div>
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



<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,   // duración de la animación
    easing: 'ease-in-out',
    once: true       // solo se ejecuta una vez
  });
</script>
<!-- Inicialización del confeti -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const hayCumple = document.body.getAttribute('data-hay-cumple') === '1';
    if(hayCumple){
      // Confeti repetido durante 3 segundos
      const duration = 7000;
      const end = Date.now() + duration;

      (function frame(){
        confetti({
          particleCount: 3,
          angle: 60,
          spread: 55,
          origin: { x: 0 },
          colors: ['#C7D744', '#213877']
        });
        confetti({
          particleCount: 3,
          angle: 120,
          spread: 55,
          origin: { x: 1 },
          colors: ['#C7D744', '#213877']
        });

        if(Date.now() < end){
          requestAnimationFrame(frame);
        }
      }());
    }
  });
</script>
</body>
</html>
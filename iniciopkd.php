<?php
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
<?php $activePage = 'inicio'; ?>
<?php include 'header.php'; ?>
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
      <a href="calendario.php" class="text-decoration-none">
      <div class="card shadow-sm p-4 border-0 rounded-4 acceso-hover">
        <i class="bi bi-calendar-check display-5 icono-acceso"></i>
        <h6 class="mt-3 fw-semibold text-primary">Calendario</h6>
      </div>
      </a>
    </div>
    <div class="col-6 col-md-3">
      <a href="caphum.php" class="text-decoration-none">
      <div class="card shadow-sm p-4 border-0 rounded-4 acceso-hover">
        <i class="bi bi-people display-5 icono-acceso"></i>
        <h6 class="mt-3 fw-semibold text-primary">Capital Humano</h6>
      </div>
      </a>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-4 border-0 rounded-4 acceso-hover">
        <i class="bi bi-newspaper display-5 icono-acceso"></i>
        <h6 class="mt-3 fw-semibold text-primary">Noticias</h6>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <a href="http://192.168.10.9:8052/#/login" class="text-decoration-none" target="_blank">
      <div class="card shadow-sm p-4 border-0 rounded-4 acceso-hover">
        <i class="bi bi-envelope display-5 icono-acceso"></i>
        <h6 class="mt-3 fw-semibold text-primary">Buzón</h6>
      </div>
      </a>
    </div>
  </div>
</section>

<!-- NOTICIAS INTERNAS -->
<section class="container my-5">
  <h3 class="section-title text-center fw-bold" style="color: #213877;">Últimas Noticias</h3>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card shadow-sm h-100 border-0 rounded-4 noticia-hover">
        <img src="img/ho.png" class="card-img-top rounded-top-4" alt="Noticia 1">
        <div class="card-body">
          <h5 class="card-title fw-semibold" style="color: #213877;">Nueva política interna</h5>
          <p class="card-text text-secondary">Conoce las actualizaciones en la política de home office.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm h-100 border-0 rounded-4 noticia-hover">
        <img src="img/cap.png" class="card-img-top rounded-top-4" alt="Noticia 2">
        <div class="card-body">
          <h5 class="card-title fw-semibold" style="color: #213877;">Capacitación 2025</h5>
          <p class="card-text text-secondary">Inscríbete a las capacitaciones en línea de este trimestre.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm h-100 border-0 rounded-4 noticia-hover">
        <img src="img/recog.jpg" class="card-img-top rounded-top-4" alt="Noticia 3" height="420">
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
  
  <!--TENDENCIAS-->
<section id="noticias-finanzas" class="py-5" style="background-color:#f3f4f6;">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold" style="color: var(--secundario);">
        <i id="grafica" class="bi bi-graph-up-arrow me-2"></i>Tendencias Financieras
      </h2>
      <p class="text-muted">Mantente al día con las últimas noticias del sector financiero.</p>
    </div>

    <div id="feed-finanzas" class="row g-4 justify-content-center"></div>
  </div>
</section>

<script>
  async function cargarNoticias() {
    try {
      const rssURL = 'https://www.elfinanciero.com.mx/rss';
      const response = await fetch(`https://api.rss2json.com/v1/api.json?rss_url=${rssURL}`);
      const data = await response.json();

      const contenedor = document.getElementById('feed-finanzas');
      contenedor.innerHTML = data.items.slice(0, 6).map(item => `
        <div class="col-md-4 col-sm-6">
          <div class="noticia-card h-100 position-relative">
            <div class="card-img" 
                 style="background-image: url('${item.enclosure?.link || 'img/default-news.jpg'}');">
            </div>
            <div class="card-overlay p-3">
              <h6 class="card-title fw-bold">${item.title}</h6>
              <p class="card-text small">${item.pubDate.slice(0,16)}</p>
              <a href="${item.link}" target="_blank" class="btn btn-sm btn-corporativo mt-2">
                Leer más <i class="bi bi-box-arrow-up-right"></i>
              </a>
            </div>
          </div>
        </div>
      `).join('');

    } catch (error) {
      console.error('Error cargando noticias:', error);
      document.getElementById('feed-finanzas').innerHTML = `
        <div class="text-center text-danger">No se pudieron cargar las noticias.</div>`;
    }
  }
  cargarNoticias();
</script>

<style>
  :root {
    --principal: #C7D744; /* verde-limón */
    --secundario: #213877; /* azul oscuro */
  }

    #grafica{
      color: #C7D744;
    }
  .noticia-card {
    border-radius: 1rem;
    overflow: hidden;
    position: relative;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 0.5rem 1rem rgba(33,56,119,0.15);
  }

  .noticia-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0.8rem 1.5rem rgba(33,56,119,0.3);
  }

  /* Imagen fija */
  .card-img {
    width: 100%;
    height: 220px;
    background-size: cover;
    background-position: center;
    border-bottom: 2px solid rgba(199,215,68,0.3);
  }

  /* Overlay con degradado corporativo */
  .card-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(180deg, rgba(199,215,68,0.2) 0%, rgba(33,56,119,0.85) 100%);
    color: #fff;
    padding: 1rem;
  }

  .card-title {
    font-size: 1rem;
    color: #fff;
  }

  .card-text {
    font-size: 0.8rem;
    color: rgba(199,215,68,0.9);
    font-weight: bold;
    
  }

  /* Botones corporativos */
.btn-corporativo {
  border: 1px solid #213877;       /* azul oscuro */
  background-color: #213877 !important;       /* fondo azul oscuro */
  color: #C7D744 !important;                  /* texto verde-limón */
  font-weight: bold;                /* texto en negrita */
  transition: all 0.3s ease;
}

.btn-corporativo:hover {
  background-color: #C7D744 !important;       /* fondo verde-limón al hover */
  color: #ffffffff !important;                  /* texto azul oscuro al hover */
  border-color: #C7D744;
}

</style>

  </main>
  <!--FOOTER-->
<?php include 'footer.php'; ?>
<?php include 'iralinicio.php'; ?>

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
<script src="js/moviles.js"></script>
</body>
</html>

<?php
// 🔒 Bloque de seguridad de sesión
session_start();
if (empty($_SESSION['user_id'])) {
    header('Location: index.php'); 
    exit;
}
?>
<header>
  <style>
/* Fondo degradado animado */
@keyframes gradientBG {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

#loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: white;
  background-size: 400% 400%;
  animation: gradientBG 15s ease infinite;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 9999;
  transition: opacity 0.5s ease;
}

/* Contenedor centrado */
.loader-content {
  text-align: center;
}

/* Logo animado */
.logo-wrapper {
  position: relative;
  display: inline-block;
}

.loader-logo {
  width: 150px;
  animation: float 2s ease-in-out infinite;
  z-index: 2;
  position: relative;
}

/* Movimiento de flotación del logo */
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
}

/* Spinner alrededor del logo */
.spinner {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 180px;
  height: 180px;
  margin-left: -90px;
  margin-top: -90px;
  border: 6px solid rgba(255,255,255,0.2);
  border-top: 6px solid #C7D744;
  border-radius: 50%;
  animation: spin 1.5s linear infinite;
  z-index: 1;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

</style>
  <!-- Loader ultra-profesional -->
  <div id="loader">
    <div class="loader-content">
      <div class="logo-wrapper">
        <img src="img/Logo Pacada.png" alt="Logo Pacada" class="loader-logo">
        <div class="spinner"></div>
      </div>
    </div>
  </div>

  <!-- Contenido principal oculto hasta que cargue -->
  <div id="content" style="display:none;">

  <!-- NAV FIJO -->
  <div class="navegadorflot">
    <div class="franja-azul"></div>
    
    <div class="logo-container d-flex align-items-center justify-content-between px-3">
      <img class="logopacada" src="img/Logo Pacada.png" alt="Logo Pacada">
      <div class="divsesion">
       <span class="navbar-text text-black">
  Hola de nuevo <strong><?= htmlspecialchars($_SESSION['fullname'] ?? $_SESSION['username']) ?></strong> |
  <a href="logout.php" class="text-black text-decoration-underline">Cerrar sesión</a>
</span>

      </div>
    </div>
    
    <div class="franja-azul2"></div>
    
    <nav class="navbar navbar-expand-lg navbar-dark navbar-pkd">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="iniciopkd.php">INTRANET | PACADA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPKD">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarPKD">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link <?php echo ($activePage == 'inicio') ? 'active' : ''; ?>" href="iniciopkd.php">Inicio</a></li>
            <li class="nav-item"> <a class="nav-link <?php echo ($activePage == 'nosotros') ? 'active' : ''; ?>" href="nosotros.php">Nosotros</a></li>
            <li class="nav-item"> <a class="nav-link <?php echo ($activePage == 'calendario') ? 'active' : ''; ?>" href="calendario.php">Calendario</a></li>
          
        
            
            <!-- Dropdown Servicios -->
         <?php
$currentPage = basename($_SERVER['PHP_SELF'], ".php");
?>

<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle <?php echo ($currentPage == 'servicios') ? 'active' : ''; ?>" 
     href="servicios.php" id="serviciosDropdown" role="button">
    Servicios
  </a>
  <ul class="dropdown-menu" aria-labelledby="serviciosDropdown">
    <li><a class="dropdown-item" href="credliquid.php">Crédito de Liquidez</a></li>
    <li><a class="dropdown-item" href="crednom.php">Crédito de Nómina</a></li>
    <li><a class="dropdown-item" href="credauto.php">Crédito de Auto</a></li>
    <li><a class="dropdown-item" href="credcapt.php">Crédito para Capital de Trabajo</a></li>
    <li><a class="dropdown-item" href="credff.php">Factoraje Financiero</a></li>
  </ul>
</li>
<style>
  /* Menú dropdown al pasar el mouse en pantallas grandes */
@media (min-width: 992px) {
  .navbar .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; /* elimina salto */
  }
}
</style>

            <!-- Dropdown Capital Humano -->
  <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="caphum.php" id="capitalDropdown" role="button">
    Capital Humano
  </a>
  <ul class="dropdown-menu" aria-labelledby="capitalDropdown">
    <li><a class="dropdown-item" href="organigrama.php">Organigrama</a></li>
    <li><a class="dropdown-item" href="induccion.php">Inducción</a></li>
    <li><a class="dropdown-item" href="fyc.php">Formatos Internos</a></li>
      <li><a class="dropdown-item" href="reclutamiento.php">Uniformes</a></li>
      <li><a class="dropdown-item" href="reclutamiento.php">Eventos</a></li>
      <li><a class="dropdown-item" href="reclutamiento.php">Bienestar</a></li>
      <li><a class="dropdown-item" href="reclutamiento.php">Seguridad e Higiene</a></li>
      <li><a class="dropdown-item" href="reclutamiento.php">Beneficios</a></li>
  </ul>
</li>

            <!-- Dropdown Áreas -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="areasDropdown" role="button" data-bs-toggle="dropdown">
                Áreas
              </a>
              <ul class="dropdown-menu" aria-labelledby="areasDropdown">
                <li><a class="dropdown-item" href="#">Finanzas</a></li>
                <li><a class="dropdown-item" href="#">Recursos Humanos</a></li>
                <li><a class="dropdown-item" href="#">TI</a></li>
                <li><a class="dropdown-item" href="#">Jurídico</a></li>
              </ul>
            </li>

            <li class="nav-item"><a class="nav-link" href="#">Noticias</a></li>
            <li class="nav-item"><a class="nav-link" href="http://192.168.10.9:8052/#/login" target="_blank">Buzón</a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.pacada.com.mx/EduFin.html" target="_blank">Educación Financiera</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="franja-azul"></div>
  </div>
</header>

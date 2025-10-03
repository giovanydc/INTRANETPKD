<header>
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
        <a class="navbar-brand fw-bold" href="iniciopkd.php">INTRANET | PACADA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPKD">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarPKD">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link <?php echo ($activePage == 'inicio') ? 'active' : ''; ?>" href="iniciopkd.php">Inicio</a></li>
            <li class="nav-item"> <a class="nav-link <?php echo ($activePage == 'nosotros') ? 'active' : ''; ?>" href="nosotros.php">Nosotros</a></li>
        
            
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

            <!-- Dropdown Calendario -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="calendarioDropdown" role="button" data-bs-toggle="dropdown">
                Calendario
              </a>
              <ul class="dropdown-menu" aria-labelledby="calendarioDropdown">
                <li><a class="dropdown-item" href="#">Cumpleaños</a></li>
                <li><a class="dropdown-item" href="#">Eventos</a></li>
                <li><a class="dropdown-item" href="#">Capacitaciones</a></li>
              </ul>
            </li>

            <!-- Dropdown Capital Humano -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="capitalDropdown" role="button" data-bs-toggle="dropdown">
                Capital Humano
              </a>
              <ul class="dropdown-menu" aria-labelledby="capitalDropdown">
                <li><a class="dropdown-item" href="#">Directorio</a></li>
                <li><a class="dropdown-item" href="#">Organigrama</a></li>
                <li><a class="dropdown-item" href="#">Reclutamiento</a></li>
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
            <li class="nav-item"><a class="nav-link" href="#">Buzón</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Educación Financiera</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="franja-azul"></div>
  </div>
</header>
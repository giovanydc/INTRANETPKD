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
    --principal: #C7D744; /* verde-limón */
    --secundario: #213877;
  }

  .organigrama-section {
    background: linear-gradient(180deg, var(--secundario) 0%, #ffffff 100%);
    padding: 60px 0;
    padding-top: 60px;
    padding-bottom: 60px;
  }

  /* ====== Título moderno y resaltado ====== */
  .titulo-organigrama {
    color: var(--principal);
    font-size: 3rem;
    letter-spacing: 2px;
    font-family: 'Segoe UI', sans-serif;
    position: relative;
    display: inline-block;
    z-index: 1;
    text-transform: uppercase;
    font-weight: 800;
    margin-bottom: 40px;
  }

  /* Subrayado moderno degradado */
  .titulo-organigrama::after {
    content: '';
    position: absolute;
    width: 50%;
    height: 6px;
    background: linear-gradient(90deg, var(--principal), #ffffff);
    left: 25%;
    bottom: -10px;
    border-radius: 3px;
  }

  /* Sombra sutil para destacar */
  .titulo-organigrama {
    text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
  }

  /* ====== Imagen organigrama ====== */
  .organigrama-fullwidth {
    width: 100%;
    display: flex;
    justify-content: center;
  }

  .organigrama-img {
    width: 100%;
    max-width: 1800px;
    height: auto;
    border: 6px solid var(--principal);
    border-radius: 12px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .organigrama-img:hover {
    transform: scale(1.03);
    box-shadow: 0 12px 40px rgba(0,0,0,0.4);
  }

  @media (max-width: 768px) {
    .titulo-organigrama {
      font-size: 2.2rem;
    }
    .organigrama-img {
      width: 100%;
    }
  }
</style>
</head>
<body>
<?php include 'header.php'; ?>
<main>
<!-- =====================
     SECCIÓN ORGANIGRAMA
====================== -->
<section class="organigrama-section py-5">
  <div class="text-center mb-4 mt-5">
    <h2 class="fw-bold titulo-organigrama">Organigrama PACADA</h2>
  </div>
  <div class="organigrama-fullwidth">
    <img src="img/organigrama_pkd.jpg" alt="Organigrama PACADA" class="organigrama-img shadow-lg">
  </div>
</section>
</main>
  <!--FOOTER-->
<?php include 'footer.php'; ?>
<?php include 'iralinicio.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
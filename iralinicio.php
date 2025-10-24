<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página con botón Subir</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    :root {
      --primario: #C7D744;   /* verde-limón */
      --secundario: #213877;
      --boton-bg: linear-gradient(135deg, #C7D744, #aacc33);
      --boton-hover: linear-gradient(135deg, #aacc33, #d0e755);
    }


    #scrollToTopBtn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      background: var(--boton-bg);
      color: white;
      border: none;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      cursor: pointer;
      font-size: 24px;
      line-height: 1;
      opacity: 0;
      transition: opacity 0.5s ease, transform 0.3s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      z-index: 9999;
      touch-action: manipulation;
    }

    #scrollToTopBtn.show-btn {
      display: block;
      opacity: 1;
    }

    #scrollToTopBtn:hover {
      background: var(--boton-hover);
      transform: translateY(-3px);
    }

    /* Responsive */
    @media (max-width: 768px) {
      #scrollToTopBtn {
        width: 45px;
        height: 45px;
        font-size: 22px;
        bottom: 15px;
        right: 15px;
      }
    }

    @media (max-width: 480px) {
      #scrollToTopBtn {
        width: 40px;
        height: 40px;
        font-size: 20px;
        bottom: 10px;
        right: 10px;
      }
    }
  </style>
</head>
<body>
  <!-- Botón Subir al inicio -->
  <button id="scrollToTopBtn" title="Subir">↑</button>
  <script>
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    }
    function toggleScrollButton() {
      const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      if (scrollTop > 200) {
        scrollToTopBtn.classList.add("show-btn");
      } else {
        scrollToTopBtn.classList.remove("show-btn");
      }
    }
    window.addEventListener("scroll", toggleScrollButton);
    scrollToTopBtn.addEventListener("click", scrollToTop);
  </script>
</body>
</html>
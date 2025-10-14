<!-- Botón subir al inicio moderno -->
<button id="backToTop" title="Subir al inicio">
  <svg width="24" height="24" viewBox="0 0 24 24">
    <path d="M12 4l-8 8h5v8h6v-8h5z" fill="white"/>
  </svg>
</button>

<style>
/* Botón fijo y moderno */
#backToTop {
  position: fixed;
  bottom: 25px;
  right: 25px;
  width: 50px;
  height: 50px;
  background-color: #C7D744; /* color principal */
  border: none;
  border-radius: 50%;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.4s ease, transform 0.3s ease, background-color 0.3s ease;
  z-index: 9999;
  box-shadow: 0 4px 8px rgba(0,0,0,0.3);
}

/* Hover: escala y color secundario */
#backToTop:hover {
  transform: scale(1.15);
  background-color: #213877; /* color secundario */
}

/* Mostrar el botón */
#backToTop.show {
  opacity: 1;
  pointer-events: auto;
}

/* Animación ligera del SVG */
#backToTop svg path {
  transition: transform 0.3s ease;
}
#backToTop:hover svg path {
  transform: translateY(-2px);
}

/* Adaptación móvil */
@media (max-width: 768px) {
  #backToTop {
    width: 45px;
    height: 45px;
    bottom: 20px;
    right: 20px;
  }
}
</style>

<script>
const backToTopButton = document.getElementById('backToTop');

window.addEventListener('scroll', () => {
  if (window.scrollY > 200) {
    backToTopButton.classList.add('show');
  } else {
    backToTopButton.classList.remove('show');
  }
});

// Scroll suave al hacer clic
backToTopButton.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>

document.addEventListener('DOMContentLoaded', function() {
  const dropdown = document.getElementById('serviciosDropdown');

  dropdown.addEventListener('click', function(e) {
    const menu = this.nextElementSibling;

    // Para pantallas menores a 992px (móviles y tablets)
    if (window.innerWidth < 992) {
      // Si el menú NO está abierto, previene navegación y lo abre
      if (!menu.classList.contains('show')) {
        e.preventDefault();
        new bootstrap.Dropdown(this).toggle();
      }
      // Si ya estaba abierto, deja navegar al link
    }
  });
});
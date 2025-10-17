<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario Laboral y Financiero | Intranet Pacada</title>

  <!-- Bootstrap y FullCalendar -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/main.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.11/main.min.css" rel="stylesheet" />

  <style>
    :root {
      --color-principal: #C7D744;
      --color-secundario: #213877;
      --color-fondo: #f5f6fa;
      --color-texto: #2d2d2d;
    }

    body {
      background-color: var(--color-fondo);
      font-family: 'Segoe UI', Arial, sans-serif;
      color: var(--color-texto);
    }

    header {
      background-color: var(--color-secundario);
      color: white;
      padding: 10px 0;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    .navbar-brand img {
      height: 45px;
      width: auto;
    }

    .navbar-nav .nav-link {
      color: white !important;
      font-weight: 500;
      transition: 0.3s;
    }

    .navbar-nav .nav-link:hover {
      color: var(--color-principal) !important;
    }

    .navbar-toggler {
      border-color: var(--color-principal);
    }

    .navbar-toggler-icon {
      background-color: var(--color-principal);
      border-radius: 3px;
    }

    .container {
      margin-top: 40px;
      margin-bottom: 40px;
      max-width: 1000px;
    }

    #calendar {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.08);
      border-top: 6px solid var(--color-principal);
    }

    .fc .fc-button-primary {
      background-color: var(--color-principal);
      border-color: var(--color-principal);
      color: var(--color-secundario);
      font-weight: 600;
    }
    .fc .fc-button-primary:hover {
      background-color: #b9c937;
      border-color: #b9c937;
    }

    .fc-toolbar-title {
      color: var(--color-secundario);
      font-weight: 700;
    }

    .fc-event-principal { 
      background-color: var(--color-principal); 
      border-color: var(--color-principal); 
      color: var(--color-secundario) !important;
      font-weight: 600;
    } 

    .fc-event-secundario { 
      background-color: var(--color-secundario); 
      border-color: var(--color-secundario); 
      color: #ffffff !important;
      font-weight: 600;
    }

    .fc-event-warning { 
      background-color: #ffc107; 
      border-color: #ffc107; 
      color: #343a40 !important; 
      font-weight: 600;
    }

    .fc .fc-daygrid-day:hover {
      background-color: rgba(199, 215, 68, 0.08);
      transition: 0.2s ease-in-out;
    }

    .fc .fc-col-header-cell-cushion {
      color: var(--color-secundario);
      font-weight: 600;
    }

    /* 🔹 Quitar los números de los días */
    .fc-daygrid-day-number {
      display: none !important;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="img/Logo_Pacada.png" alt="Logo Pacada" class="me-2">
        <span class="fw-bold">Intranet Pacada</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Personal</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Finanzas</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Cumpleaños</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Calendario</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- CALENDARIO -->
  <div class="container">
    <h1 class="mb-4 text-center">Calendario Laboral y Financiero</h1>
    <div id="calendar"></div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.11/index.global.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/locales/es.global.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'es',
        themeSystem: 'bootstrap5',

        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },

        events: 'eventos.php',

        eventClick: function(info) {
          alert(
            'Evento: ' + info.event.title + 
            '\nDescripción: ' + (info.event.extendedProps.descripcion || 'N/A')
          );
        }
      });

      calendar.render();
    });
  </script>
</body>
</html>

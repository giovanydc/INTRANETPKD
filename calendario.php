<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header('Location: index.php'); 
    exit;
}
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
</head>
<body>
<?php $activePage = 'calendario'; ?>
<?php include 'header.php'; ?>
<main>
  <!-- HERO ENCABEZADO -->
  <div id="contenedorhero" class="hero-header text-center py-5 px-3"
    style="background: linear-gradient(135deg, #213877, #C7D744); color: white; border-radius: 0 0 25px 25px;">
    <h1 class="fw-bold mb-2 display-5">
      <i class="bi bi-calendar2-week-fill me-2"></i>
      Calendario Laboral PACADA
    </h1>
    <p class="lead mb-0">Planifica, organiza y mantén el control de cada fecha importante</p>
  </div>

  <div class="container my-4 mt-5">
    <div id="nav-calendario" class="d-flex justify-content-between align-items-center mb-4"> 
      <button class="btn" id="prevMonth"><i class="bi bi-chevron-left"></i></button>
      <h4 id="monthTitle">Octubre 2025</h4>
      <div>
        <button class="btn" id="nextMonth"><i class="bi bi-chevron-right"></i></button>
      </div>
    </div>

    <div class="calendar" id="calendarGrid">
      <!-- Los días se llenan dinámicamente -->
    </div>

    <div class="mt-4">
      <h5 class="fw-bold text-secondary">Leyenda</h5>
      <div class="legend-item">
        <span class="legend-color" style="background-color: var(--color-principal);"></span> Evento financiero
      </div>
      <div class="legend-item">
        <span class="legend-color" style="background-color:#1E90FF;"></span> Cumpleaños
      </div>
      <div class="legend-item">
        <span class="legend-color" style="background-color:white; border:2px solid var(--color-secundario);"></span> Hoy
      </div>
    </div>
  </div>

  <script>
  const calendarGrid = document.getElementById('calendarGrid');
  const monthTitle = document.getElementById('monthTitle');
  const prevMonthBtn = document.getElementById('prevMonth');
  const nextMonthBtn = document.getElementById('nextMonth');

  const months = ["Enero","Febrero","Marzo","Abril","Mayo","Junio",
                  "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

  let currentMonth = new Date().getMonth();
  let currentYear = new Date().getFullYear();
  let eventos = []; // se llenará desde la DB

  // Traer eventos desde la base de datos
  function fetchEventos(callback){
      fetch('get_events.php') // archivo PHP que devuelve JSON con tus eventos
      .then(response => response.json())
      .then(data => {
          eventos = data;
          if(callback) callback();
      })
      .catch(err => console.error('Error cargando eventos:', err));
  }

  function renderCalendar() {
    calendarGrid.classList.add('fade-out');

    setTimeout(() => {
      const today = new Date();
      const firstDay = new Date(currentYear, currentMonth, 1).getDay(); 
      const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
      const startDay = (firstDay === 0 ? 6 : firstDay - 1); // semana inicia lunes

      let html = '';
      ['Lun','Mar','Mié','Jue','Vie','Sáb','Dom'].forEach(d => html += `<div class="day-header">${d}</div>`);

      for(let i = 0; i < startDay; i++){
          html += `<div class="day-empty"></div>`;
      }

      for(let d = 1; d <= daysInMonth; d++){
          const fechaStr = `${currentYear}-${String(currentMonth+1).padStart(2,'0')}-${String(d).padStart(2,'0')}`;
          const evento = eventos.find(ev => ev.fecha === fechaStr);
          const isToday = (today.getDate() === d && today.getMonth() === currentMonth && today.getFullYear() === currentYear);
          const highlight = isToday ? 'highlight' : '';

          if(evento){
              let color;
              let tooltip = '';

              if(evento.tipo === 'financiero'){
                  color = 'var(--color-principal)';
                  tooltip = `title="${evento.titulo}"`;
                  html += `<div class="day ${highlight}" ${tooltip} style="background-color:${color}1A;">
                             ${d}<div class="payday" style="background-color:${color}; color:#fff;">${evento.titulo}</div>
                           </div>`;
              } 
              else if(evento.tipo === 'cumpleaños'){
                  color = '#1E90FF';
                  tooltip = `data-bs-toggle="tooltip" data-bs-html="true" title='<div style="text-align:center;"><img src="${evento.foto}" style="width:80px;height:80px;border-radius:50%;margin-bottom:5px;"><br><strong>${evento.titulo}</strong></div>'`;
                  html += `<div class="day ${highlight}" ${tooltip} style="background-color:${color}1A;">
                             ${d}
                           </div>`;
              } 
              else {
                  color = '#d3e2ff';
                  tooltip = `title="${evento.titulo}"`;
                  html += `<div class="day ${highlight}" ${tooltip} style="background-color:${color}1A;">
                             ${d}<div class="payday" style="background-color:${color}; color:#fff;">${evento.titulo}</div>
                           </div>`;
              }
          } else {
              html += `<div class="day ${highlight}">${d}</div>`;
          }
      }

      calendarGrid.innerHTML = html;
      monthTitle.textContent = `${months[currentMonth]} ${currentYear}`;
      calendarGrid.classList.remove('fade-out');

      // Inicializar tooltips de Bootstrap
      const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
      tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });
    }, 400);
  }

  prevMonthBtn.addEventListener('click', () => {
      currentMonth--;
      if(currentMonth < 0){
          currentMonth = 11;
          currentYear--;
      }
      renderCalendar();
  });

  nextMonthBtn.addEventListener('click', () => {
      currentMonth++;
      if(currentMonth > 11){
          currentMonth = 0;
          currentYear++;
      }
      renderCalendar();
  });

  fetchEventos(renderCalendar);
  </script>

  <style>
  :root {
    --color-principal: #C7D744;
    --color-secundario: #213877;
    --color-fondo: #faf8f8ff;
    --color-hover: #edf2ff;
  }

  body { background-color: var(--color-fondo); font-family: "Poppins", sans-serif; }

  #contenedorhero{ margin-top: 50px; }

  #nav-calendario {
    background: linear-gradient(90deg, var(--color-secundario), #1b2e6b);
    color: white;
    padding: 15px 25px;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
  }

  #nav-calendario h4 { margin: 0; font-weight: 600; letter-spacing: 0.5px; }

  #nav-calendario button {
    background-color: var(--color-principal);
    border: none;
    color: var(--color-secundario);
    font-weight: 600;
    transition: 0.3s;
  }

  #nav-calendario button:hover { background-color: #e2f065; transform: scale(1.05); }

  .calendar {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 10px;
    background-color: white;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    opacity: 1;
    transform: translateY(0);
    transition: opacity 0.5s ease, transform 0.5s ease;
  }

  .calendar.fade-out { opacity: 0; transform: translateY(20px); }

  .day-header { text-align: center; font-weight: 600; color: var(--color-secundario); text-transform: uppercase; padding: 8px; font-size: 0.9rem; }

  .day {
    background-color: #fff;
    border-radius: 12px;
    padding: 10px;
    text-align: right;
    font-weight: 500;
    position: relative;
    transition: all 0.3s ease;
    min-height: 80px;
    box-shadow: inset 0 0 0 1px #e0e0e0;
  }

  .day:hover { background-color: var(--color-hover); transform: translateY(-2px); box-shadow: 0 3px 10px rgba(0,0,0,0.1); }

  .day.highlight { background-color: var(--color-principal); color: var(--color-secundario); font-weight: bold; animation: pulse 1.5s infinite; }

  @keyframes pulse { 0% { box-shadow: 0 0 0 0 rgba(199, 215, 68, 0.6); } 70% { box-shadow: 0 0 0 10px rgba(199, 215, 68, 0); } 100% { box-shadow: 0 0 0 0 rgba(199, 215, 68, 0); } }

  .payday { position: absolute; bottom: 8px; left: 8px; background-color: var(--color-secundario); color: white; padding: 3px 8px; border-radius: 6px; font-size: 0.75rem; font-weight: 600; }

  .legend-item { display: flex; align-items: center; margin-top: 8px; }

  .legend-color { display: inline-block; width: 18px; height: 18px; border-radius: 4px; margin-right: 10px; box-shadow: 0 0 5px rgba(0,0,0,0.2); }

  @media (max-width: 768px) {
    .calendar { gap: 5px; padding: 10px; }
    .day { font-size: 0.8rem; min-height: 60px; }
  }
  </style>
</main>

  <!--FOOTER-->
<?php include 'footer.php'; ?>
<?php include 'iralinicio.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<title>Sistema Académico CLGUH</title>
<link rel="icon" type="image/x-icon" href="img/favicon.ico">

<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styleMe.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

</head>

<body>
  <nav class="sidebar">
    <div class="sidebar-top-wrapper">
      <div class="sidebar-top">
        <a href="#" class="logo__wrapper">
          <img src="img/R.png" alt="Logo" class="logo-small">
          <span class="hide">
            CLGUH
          </span>
        </a>
      </div>
      <div class="expand-btn">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.00979 2.72L10.3565 7.06667C10.8698 7.58 10.8698 8.42 10.3565 8.93333L6.00979 13.28"
            stroke="#4A516D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>
    </div>

    <div class="search__wrapper">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M9 9L13 13M5.66667 10.3333C3.08934 10.3333 1 8.244 1 5.66667C1 3.08934 3.08934 1 5.66667 1C8.244 1 10.3333 3.08934 10.3333 5.66667C10.3333 8.244 8.244 10.3333 5.66667 10.3333Z"
          stroke="#697089" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <input type="search" placeholder="Buscando...">
    </div>
    <div class="sidebar-links">
      <h2>Menu principal</h2>
      <ul>
        <li>
          <a href="#inicio" title="Inicio" class="tooltip" data-page="inicio">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24"
              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
            </svg>
            <span class="link hide">Inicio</span>
            <span class="tooltip__content">Inicio</span>
          </a>
        </li>
        {if isset($usuario) && $usuario.tipo_usuario == 1}
          <!--menu de alumnos -->
          <li>
            <a href="#caracteristicas-uh" title="Características" class="tooltip" data-page="calificaciones">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"></path>
                <path d="M12 12l8 -4.5"></path>
                <path d="M12 12l0 9"></path>
                <path d="M12 12l-8 -4.5"></path>
              </svg>
              <span class="link hide">Calificaciones</span>
              <span class="tooltip__content">Calificaciones</span>
            </a>
          </li>
          <li>
            <a href="#ausencias-uh" title="Ausencias" class="tooltip" data-page="ausencias">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
              </svg>
              <span class="link hide">Consultar Ausencias</span>
              <span class="tooltip__content">Consultar Ausencias</span>
            </a>
          </li>
          <li>
            <a href="#listaprofes-uh" title="Listas De Profesores" class="tooltip" data-page="listaprofes">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
              </svg>
              <span class="link hide">Lista Profesores</span>
              <span class="tooltip__content">Lista Profesores</span>
            </a>
          </li>
          <li>
            <a href="#listaEstudiantes-uh" title="Listas De Estudiantes" class="tooltip" data-page="listaEstudiantes">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
              </svg>
              <span class="link hide">Lista Estudiantes</span>
              <span class="tooltip__content">Listas Estudiantes</span>
            </a>
          </li>
        {/if}

        {if isset($usuario) && $usuario.tipo_usuario == 2}
          <!--menu de profesores -->
          <li>
            <a href="#ausencias-profesouh" title="Filtro de Ausencias" class="tooltip" data-page="ausenciasprofesor">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
              </svg>
              <span class="link hide">Filtro de Ausencias</span>
              <span class="tooltip__content">Filtro de Ausencias</span>
            </a>
          </li>
          <li>
            <a href="#calificarprofe-uh" title="Crear - modificar Calificaciones" class="tooltip"
              data-page="calificarprofe">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"></path>
                <path d="M12 12l8 -4.5"></path>
                <path d="M12 12l0 9"></path>
                <path d="M12 12l-8 -4.5"></path>
              </svg>
              <span class="link hide">Calificaciones</span>
              <span class="tooltip__content">Calificaciones</span>
            </a>
          </li>
          <li>
            <a href="#listaprofes-uh" title="Listas De Profesores" class="tooltip" data-page="listaprofes">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
              </svg>
              <span class="link hide">Lista Profesores</span>
              <span class="tooltip__content">Lista Profesores</span>
            </a>
          </li>
          <li>
            <a href="#listaEstudiantes-uh" title="Listas De Estudiantes" class="tooltip" data-page="listaEstudiantes">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>

              </svg>
              <span class="link hide">Lista Estudiantes</span>
              <span class="tooltip__content">Listas Estudiantes</span>
            </a>
          </li>
        {/if}
        {if isset($usuario) && $usuario.tipo_usuario == 3}
          <!--menu de administradores -->
          <li>
            <a href="#informacion-uh" title="Información" class="tooltip" data-page="informacion">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
              </svg>
              <span class="link hide">Información</span>
              <span class="tooltip__content">Información</span>
            </a>
          </li>
          <li>
            <a href="#listaprofes-uh" title="Listas De Profesores" class="tooltip" data-page="listaprofes">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
              </svg>
              <span class="link hide">Lista Profesores</span>
              <span class="tooltip__content">Lista Profesores</span>
            </a>
          </li>
          <li>
            <a href="#listaEstudiantes-uh" title="Listas De Estudiantes" class="tooltip" data-page="listaEstudiantes">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>

              </svg>
              <span class="link hide">Lista Estudiantes</span>
              <span class="tooltip__content">Listas Estudiantes</span>
            </a>
          </li>
        {/if}
        <li>
          <!-- Los horarios pueden verlos todos -->
          <a href="#horarios-cursos-uh" title="Horarios" class="tooltip" data-page="horarios">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-pie" width="24"
              height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-6.8a2 2 0 0 1 -2 -2v-7a.9 .9 0 0 0 -1 -.8"></path>
              <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a1 1 0 0 1 -1 -1v-4.5"></path>
            </svg>
            <span class="link hide">Horarios de clases</span>
            <span class="tooltip__content">Horarios de clases</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidebar-links">
      <h2>Información Complementaria</h2>
      <ul>
        <li>
          <a href="#mapa" title="Mapa del colegio" class="tooltip" data-page="mapa">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-check" width="24"
              height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M11 18l-2 -1l-6 3v-13l6 -3l6 3l6 -3v9"></path>
              <path d="M9 4v13"></path>
              <path d="M15 7v8"></path>
              <path d="M15 19l2 2l4 -4"></path>
            </svg>
            <span class="link hide">Ubicación</span>
            <span class="tooltip__content">Ubicación</span>
          </a>
        </li>
        <li>
          <a href="#contacto" title="Contáctenos" class="tooltip" data-page="contactenos">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
              <path d="M4 13h3l3 3h4l3 -3h3"></path>
            </svg>
            <span class="link hide">Contáctenos</span>
            <span class="tooltip__content">Contáctenos</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidebar-links bottom-links">
      <ul>
        <li>
          <a href="#configuracion" title="Configuración" class="tooltip" data-page="configuracion">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path
                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
              </path>
              <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
            </svg>
            <span class="link hide">Configuración</span>
            <span class="tooltip__content">Configuración</span>
          </a>
        </li>
        <li>
          <a href="https://wa.me/50672211842" title="Ayuda" class="tooltip" target="_blank" data-page="ayuda"
            rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
              <path d="M12 16v.01"></path>
              <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483"></path>
            </svg>
            <span class="link hide">Ayuda</span>
            <span class="tooltip__content">Ayuda</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="divider"></div>
    <div class="sidebar__profile">
      <div class="avatar__wrapper">
        <img class="avatar" src="img/OIP.jpeg" alt="usuario">
        <div class="online__status"></div>
      </div>
      <section class="avatar__name hide">
        {if isset($usuario)}
          <div class="user-name">{$usuario.nombre} {$usuario.ap1} {$usuario.ap2}</div>
          <div class="email">{$usuario.email}</div>
        {else}
          <div class="user-name">Usuario no autenticado</div>
          <div class="email">correo@ejemplo.com</div>
        {/if}
      </section>
      <a href="logoff.php" class="logout" title="Volver al inicio">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24"
          viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
          stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
          <path d="M9 12h12l-3 -3"></path>
          <path d="M18 15l3 -3"></path>
        </svg>
      </a>
    </div>
    </div>
  </nav>

  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      var menuLinks = document.querySelectorAll('.tooltip');

      // Función para cargar la página por defecto (inicio)
      function cargarPaginaInicio() {
        var linkInicio = document.querySelector('.tooltip[data-page="inicio"]');
        if (linkInicio) {
          var page = linkInicio.getAttribute('data-page');
          realizarSolicitudAjax(page);
        }
      }

      // Función para realizar la solicitud AJAX
      function realizarSolicitudAjax(page) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'index.php?accion=ajax&page=' + page, true);
        xhr.send();

        xhr.onload = function() {
          if (this.status == 200) {
            document.getElementById('content').innerHTML = this.responseText;
          }
        };
      }

      cargarPaginaInicio();

      menuLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          var page = e.currentTarget.getAttribute('data-page');
          realizarSolicitudAjax(page);
        });
      });
    });


    //----------------------------------------------------------------------------------------//


    function confirmarEliminacion(link) {
      event.preventDefault(); // Evita el comportamiento predeterminado del enlace

      Swal.fire({
        title: '¿Estás seguro?',
        text: 'Esta acción eliminará al alumno. ¿Estás seguro de que deseas continuar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        customClass: {
          popup: 'mi-clase-personalizada', 
        }

      }).then((result) => {
        if (result.isConfirmed) {
          window.location = link.href; // Redirige al enlace si se confirma
        }
      });
    }


    //----------------------------------------------------------------------------------------//

    function mostrarModal() {
      // Abrir el modal al hacer clic en el botón con ID 'open_modal'
      const open_modal = document.getElementById('open_modal');
      if (open_modal) {
        open_modal.addEventListener('click', () => {
          // Obtener el fondo del modal
          const modal_background = document.getElementById('modal_background');
          if (modal_background) {
            // Mostrar el modal estableciendo su estilo para que sea visible
            modal_background.style.display = 'flex';
          }
        });
      }
      const close_modal = document.getElementById('close_modal');
      if (close_modal) {
        close_modal.addEventListener('click', () => {
          // Obtener el fondo del modal
          const modal_background = document.getElementById('modal_background');
          if (modal_background) {
            // Ocultar el modal al establecer su estilo para que no sea visible
            modal_background.style.display = 'none';
          }
        });
      }


      const mostrarNProfesor = document.getElementById('mostrarNProfesor');
      if (mostrarNProfesor) {
        mostrarNProfesor.addEventListener('click', () => {
          // Obtener el fondo del modal
          const modal_background2 = document.getElementById('modal_background2');
          if (modal_background2) {
            // Mostrar el modal estableciendo su estilo para que sea visible
            modal_background2.style.display = 'flex';
          }
        });
      }
      // Cerrar el modal al hacer clic en el botón con ID 'close_modal'
      const mostrarNProfesorClose = document.getElementById('mostrarNProfesorClose');
      if (mostrarNProfesorClose) {
        mostrarNProfesorClose.addEventListener('click', () => {
          // Obtener el fondo del modal
          const modal_background = document.getElementById('modal_background2');
          if (modal_background2) {
            // Ocultar el modal al establecer su estilo para que no sea visible
            modal_background2.style.display = 'none';
          }
        });
      }
    }



    // Esperar a que el DOM esté completamente cargado antes de ejecutar la función
    document.addEventListener('DOMContentLoaded', mostrarModal);

    //----------------------------------------------------------------------------------------//
  </script>
  <script src="js/script_menu.js"></script>
</body>

</html>
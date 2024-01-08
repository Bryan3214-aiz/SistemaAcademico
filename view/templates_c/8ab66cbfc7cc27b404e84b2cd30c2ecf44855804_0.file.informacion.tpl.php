<?php
/* Smarty version 4.3.4, created on 2023-12-23 06:18:46
  from 'C:\xampp\htdocs\proyectoBVT\view\templates\contenido\informacion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65866db60ac329_83292557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ab66cbfc7cc27b404e84b2cd30c2ecf44855804' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoBVT\\view\\templates\\contenido\\informacion.tpl',
      1 => 1703308723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65866db60ac329_83292557 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
  #contInfo {
    margin-top: 60px;
    width: 95%;
    max-width: 1450px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.253);
    border-radius: 10px;
    overflow: hidden;
  }

  #headInfo {
    text-align: left;
    width: 100%;
    background-color: #ffffffc5;
    padding: 15px;
  }

  .btnAgregar {
    background-color: #387385c2;
    color: #fff;
    padding: 0.7rem 1rem;
    border-radius: 0.5rem;
    margin-left: 8px;
    text-decoration: none;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
  }

  .btnAgregar:hover {
    background-color: #abe6f848;
    color: #000000;
    font-weight: 700;
  }

  /* Estilos para la tabla */
  .table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
  }

  .table th,
  .table td {
    padding: 20px;
    text-align: left;
    /* Línea sutil en la parte inferior de las celdas */
  }

  .table thead tr {
    background-color: #e9ecef;
    /* Fondo gris para la cabecera */
  }

  .table tfoot tr {
    background-color: #e9ecef;
    /* Fondo gris para el pie */
  }

  .table tbody>tr:nth-of-type(odd) {
    background-color: #f9f9f9;
  }

  .table-wrapper {
    padding: 0 20px;
    max-height: 700px;
    overflow-y: auto;
  }

  .table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
  }

  /* Estilo para el contenedor con scroll */
  .table-wrapper::-webkit-scrollbar {
    width: 10px;
    /* Ancho del scroll */
  }

  /* Track del scroll */
  .table-wrapper::-webkit-scrollbar-track {
    background: #f1f1f1;
    /* Color de fondo del track */
  }

  /* Handle del scroll */
  .table-wrapper::-webkit-scrollbar-thumb {
    background: #888;
    /* Color de fondo del handle */
    border-radius: 5px;
    /* Redondeo de las esquinas del handle */
  }

  /* Handle del scroll al pasar el mouse */
  .table-wrapper::-webkit-scrollbar-thumb:hover {
    background: #555;
    /* Color de fondo del handle al pasar el mouse */
  }


  .btnInfoCont {
    display: flex;
  }

  .btnInfo {
    margin-right: 10px;
    padding: 15px 10px;
    background-color: #ffffff25;
    cursor: pointer;
    transition: all 0.3s ease;
  }



  .page-item {
    margin: 5px;
    padding: 8px 12px;
    border-radius: 5px;
    border: 1px solid #ddd;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .page-item:hover {
    background-color: #d6d6d6;
  }

  .page-item.active {
    background-color: #387385c2;
    color: #fff;
    font-weight: bold;
  }


  .btn-primary {
    background-color: #387385c2;
    color: #fff;
    padding: 1rem 1.5rem;
    border-radius: 0.5rem;
    text-decoration: none;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
  }

  .open_modal {
    background-color: #387385c2;
    color: #fff;
    padding: 1rem 1rem;
    border-radius: 0.5rem;
    text-decoration: none;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
  }

  .close_modal {
    background-color: #bd1b1bc2;
    color: #fff;
    padding: 1rem 1rem;
    border-radius: 0.5rem;
    text-decoration: none;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
  }

  .btn-primary:hover {
    background-color: #abe6f848;
    color: #000000;
    font-weight: 700;
  }

  .open_modal:hover {
    background-color: #abe6f848;
    color: #000000;
    font-weight: 700;
  }

  .open_modal.open_modal:active {
    transform: scale(.95);
  }

  .close_modal:hover {
    background-color: #ff0000c7;
    font-weight: 700;
  }



  /* Estilo general del select */
  #curso {
    width: 100%;
    height: 35px;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    background-color: #f2f2f2;
    font-size: 16px;
  }

  /* Estilo del select al pasar el mouse */
  #curso:hover {
    background-color: #ddd;
  }

  /* Estilo de las opciones del select */
  #curso option {
    color: #c2c2c2;
  }

  /* Estilo de las opciones del select al pasar el mouse */
  #curso option:hover {
    background-color: #ddd;
  }

  .modal_background {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    backdrop-filter: blur(4px);
    background-color: rgba(255, 255, 255, 0, 3);
    z-index: 1;
    display: none;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  .modal_content {
    position: relative;
    background-image: linear-gradient(to top, #dfe9f3 0%, white 100%);
    max-width: 100vw;
    width: 600px;
    height: auto;
    padding: 2rem;
    border-radius: 10px;
    animation-name: modal;
    animation-duration: .5s;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.253);
    z-index: 10;
  }

  .modal_background2 {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    backdrop-filter: blur(4px);
    background-color: rgba(255, 255, 255, 0, 3);
    z-index: 1;
    display: none;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  .modal_content2 {
    position: relative;
    background-image: linear-gradient(to top, #dfe9f3 0%, white 100%);
    max-width: 100vw;
    width: 600px;
    height: auto;
    padding: 2rem;
    border-radius: 10px;
    animation-name: modal;
    animation-duration: .5s;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.253);
    z-index: 10;
  }

  @keyframes modal {
    from {
      transform: translateY(-50vh);
    }

    to {
      transform: translateY(0);
    }
  }

  .close {
    transform: 1s cubic-bezier(0, -0.42, 1, -0.41);
    transform: translateY(60vh);
  }

  .custom-label {
    display: block;
    margin-bottom: 5px;
    color: #333;
    font-weight: bold;
  }

  .custom-input {
    width: 65%;
    padding: 8px;
    margin: 10px 0 10px 0;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #ccc;
    transition: border-color 0.3s ease-in-out;
  }

  .custom-input:focus {
    outline: none;
    border-color: #484d52;
  }


.swal2-popup {
  transform: translateY(-5%) !important;
}

</style>

<body>
  <!-- Título de la tabla -->
  <div id="contInfo">

    <header id="headInfo">
      <button class="btnAgregar" id="open_modal" onclick="mostrarModal()">Agregar nuevo alumno</button>
      <button class="btnAgregar" id="mostrarNProfesor" onclick="mostrarModal()">Agregar nuevo profesor</button>
    </header>
    <div class="table-wrapper">
      <table class="table">

        <thead>
          <tr>
            <th>Opciones</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Dirección</th>
            <th>Cedula</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Fecha nacimiento</th>
            <th>Fecha registro</th>
          </tr>
        </thead>
        <tbody>
          <?php
$__section_alumnos_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr_alumnos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_alumnos_0_total = $__section_alumnos_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_alumnos'] = new Smarty_Variable(array());
if ($__section_alumnos_0_total !== 0) {
for ($__section_alumnos_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index'] = 0; $__section_alumnos_0_iteration <= $__section_alumnos_0_total; $__section_alumnos_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index']++){
?>
            <tr>
              <td class="btnInfoCont">
                <!-- Botones de opciones -->
                <a class="btnInfo"><img src="img/editar-usuario.png"></a>
                <a href="index.php?accion=borrar_alumno&alumno_id=<?php echo $_smarty_tpl->tpl_vars['arr_alumnos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index'] : null)]['alumno_id'];?>
" class="btnInfo"
                  onclick="confirmarEliminacion(this)"> <img src="img/borrar-usuario.png"></a>
              </td>
              <td><?php echo $_smarty_tpl->tpl_vars['arr_alumnos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index'] : null)]['nombre_alumno'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['arr_alumnos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index'] : null)]['edad'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['arr_alumnos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index'] : null)]['direccion'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['arr_alumnos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index'] : null)]['cedula'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['arr_alumnos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index'] : null)]['telefono'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['arr_alumnos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index'] : null)]['correo'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['arr_alumnos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index'] : null)]['fecha_nac'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['arr_alumnos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_alumnos']->value['index'] : null)]['fecha_registro'];?>
</td>
            </tr>
          <?php
}
}
?>
        </tbody>
      </table>
    </div>

  </div>
  <!-- Modal profesor -->

  <div class="modal_background2" id="modal_background2">
    <div class="modal_content2" id="modal_content2">
      <form action="index.php" method="post">
        <input type="hidden" name="accion" value="crear_profesor">
        <h1 class="titulo">Agregar nuevo Profesor</h1>
        <div class="modal-body">
          <div class="form-group">
            <label for="nombre" class="custom-label">Nombre Profesor:</label>
            <input type="text" class="form-control custom-input" id="nombre" name="nombre"
              placeholder="Ingrese el nombre del estudiante" required>

            <label for="direc" class="custom-label">Dirección:</label>
            <input type="text" class="form-control custom-input" id="direc" name="direccion"
              placeholder="Ingrese su dirección" minlength="1" maxlength="100" required>

            <label for="cedula" class="custom-label">Cedula:</label>
            <input type="text" class="form-control custom-input" id="cedula" name="cedula"
              placeholder="Ingrese su numero de cedula" required>

            <label for="tel" class="custom-label">Teléfono:</label>
            <input type="number" class="form-control custom-input" id="tel" name="telefono"
              placeholder="Ingrese su numero de teléfono" required>

            <label for="correo" class="custom-label">Correo:</label>
            <input type="email" class="form-control custom-input" id="correo" name="correo"
              placeholder="Ingrese su correo" required>

            <label for="correo" class="custom-label">Nivel de estudio:</label>
            <input type="text" class="form-control custom-input" id="correo" name="nivel_est"
              placeholder="Ingrese su nivel de estudio (licenciado)" required>

          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="close_modal" id="mostrarNProfesorClose">Cancelar</button>
          <button type="submit" class="btn btn-primary">Crear usuario</button>
        </div>

      </form>
    </div>
  </div>
  <!-- Modal alumno -->

  <div class="modal_background" id="modal_background">
    <div class="modal_content" id="modal_content">
      <form action="index.php" method="post">
        <input type="hidden" name="accion" value="crear_alumno">
        <h1 class="titulo">Agregar nuevo alumno</h1>
        <div class="modal-body">
          <div class="form-group">
            <label for="nombre" class="custom-label">Nombre Estudiante:</label>
            <input type="text" class="form-control custom-input" id="nombre" name="nombre_alumno"
              placeholder="Ingrese el nombre del estudiante" required>

            <label for="edad" class="custom-label">Edad:</label>
            <input type="number" class="form-control custom-input" id="edad" name="edad"
              placeholder="Ingrese la edad del alumno" required>

            <label for="direc" class="custom-label">Dirección:</label>
            <input type="text" class="form-control custom-input" id="direc" name="direccion"
              placeholder="Ingrese su dirección" minlength="1" maxlength="100" required>

            <label for="cedula" class="custom-label">Cedula:</label>
            <input type="text" class="form-control custom-input" id="cedula" name="cedula"
              placeholder="Ingrese su numero de cedula" required>

            <label for="tel" class="custom-label">Teléfono:</label>
            <input type="number" class="form-control custom-input" id="tel" name="telefono"
              placeholder="Ingrese su numero de teléfono" required>

            <label for="correo" class="custom-label">Correo:</label>
            <input type="email" class="form-control custom-input" id="correo" name="correo"
              placeholder="Ingrese su correo" required>

            <label for="fecha" class="custom-label">Fecha de nacimiento:</label>
            <input type="date" class="form-control custom-input" id="fecha" name="fecha_nac"
              placeholder="Ingrese su fecha de nacimiento" required>

          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="close_modal" id="close_modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Crear usuario</button>
        </div>

      </form>
    </div>
  </div>
</body><?php }
}

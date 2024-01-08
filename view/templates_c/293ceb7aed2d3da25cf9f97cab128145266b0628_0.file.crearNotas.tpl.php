<?php
/* Smarty version 4.3.4, created on 2023-12-20 23:28:41
  from 'C:\xampp\htdocs\proyectoBVT\view\templates\contenido\profesor\crearNotas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65836a99146cd4_85384807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '293ceb7aed2d3da25cf9f97cab128145266b0628' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoBVT\\view\\templates\\contenido\\profesor\\crearNotas.tpl',
      1 => 1703088815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65836a99146cd4_85384807 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    .content-wrapper {
        margin-top: 60px;
        width: 95%;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.253);
        border-radius: 10px;
        overflow: hidden;
    }

    .box-title {
        text-align: left;
        width: 100%;
        background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
        padding: 15px;
    }

    /* Estilo general de la tabla */
    #tbllistado {
        border-collapse: collapse;
        width: 100%;
        text-align: center;
    }

    /* Estilo de las celdas de la tabla */
    #tbllistado td,
    #tbllistado th {
        border: 1px solid #ddd;
        padding: 8px;
    }



    /* Estilo del encabezado de la tabla */
    #tbllistado th {
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: #387385c9;
        color: white;
    }

    /* Estilo del botón de calificación */
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
</style>

<body>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h1 class="box-title">Seleciona un curso</h1>
                            <input type="hidden" id="idgrupo" name="idgrupo" value="">
                        </div>
                    </div>
                    <!--box-header-->
                    <!--centro-->
                    <div class="form-inline col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <select name="curso" id="curso" class="form-control selectpicker" data-live-search="true"
                            required>
                        </select>
                    </div>
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <!-- Tabla de registros de alumnos -->
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th>Opciones</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>
                                <th>Asistencia</th>
                                <!-- Agregar encabezados necesarios para las calificaciones -->
                                <th>Calificación</th>
                                <th>Acción</th>
                            </thead>
                            <tbody>
                                <!-- Aquí se cargarían los registros de alumnos -->
                                <tr>
                                    <td>1</td>
                                    <td>Nombre</td>
                                    <td>Apellidos</td>
                                    <td>Teléfono</td>
                                    <td>Asistencia</td>
                                    <!-- Columna para mostrar la calificación -->
                                    <td>Calificación</td>
                                    <!-- Botón para calificar -->
                                    <td>
                                        <button type="button" class="open_modal" id="open_modal" onclick="mostrarModal()">
                                            Calificar
                                        </button>

                                    </td>
                                </tr>
                                <!-- ... -->
                            </tbody>
                            <tfoot>
                                <!-- Los mismos encabezados que en thead -->
                            </tfoot>
                        </table>
                    </div>
                    <!-- Fin Centro -->
                </div>
            </div>
    </div>
    <!-- /.box -->
    </section>
    <!-- /.content -->
    </div>

    <!-- Modal -->

    <div class="modal_background" id="modal_background">
        <div class="modal_content" id="modal_content">
            <form action="index.php" method="post">
                <input type="hidden" name="accion" value="crear_nota">
                <h1 class="titulo">Calificación Obtenida</h1>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nota" class="custom-label">Nota:</label>
                        <input type="number" class="form-control custom-input" id="nota" name="nota"
                            placeholder="Ingrese la nota del estudiante" minlength="1" maxlength="100" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="close_modal" id="close_modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar nota</button>
                </div>

            </form>
        </div>
    </div>

</body><?php }
}

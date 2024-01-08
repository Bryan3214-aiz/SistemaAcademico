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

    .box {
        text-align: center;
        width: 100%;
        background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
        padding: 20px;
    }

    .box-title {
        font-family: 'Work Sans', sans-serif;
        font-weight: 600;
    }

    .box button {
        margin: 10px;
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
        background-color: #3088a3d2;
        color: #fff;
        padding: 1rem 1rem;
        border-radius: 0.5rem;
        text-decoration: none;
        font-weight: 700;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    .edit_modal {
        background-color: #2564b6d2;
        color: #fff;
        padding: 1rem 1rem;
        border-radius: 0.5rem;
        text-decoration: none;
        font-weight: 700;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    .borrar_modal {
        background-color: #c01e1ed2;
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
        background-color: #3088a38c;
        font-weight: 700;
    }

    .edit_modal:hover {
        background-color: #2564b6;
        font-weight: 700;
    }

    .borrar_modal:hover {
        background-color: #ff0000c7;
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="row">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">Seleciona una función</h1>
                        <input type="hidden" id="idgrupo" name="idgrupo" value="">
                    </div>
                    <button type="button" class="open_modal" id="open_modal" onclick="mostrarModal()">Nueva
                        Ausencia</button>
                    <button type="button" class="edit_modal" id="edit_modal" onclick="mostrarModal()">Editar
                        Ausencia</button>
                    <button type="button" class="borrar_modal" id="borrar_modal" onclick="mostrarModal()">borrar
                        Ausencia</button>

                </div>
                <div class="panel-body table-responsive" id="listadoregistros">
                    <!-- Tabla de registros de alumnos -->
                    <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Nombre profesor</th>
                            <th>Nombre Alumno</th>
                            <th>Motivo</th>
                            <th>Justicación de la tardía</th>
                        </thead>
                        {section name=ausencias loop=$arr_ausencias}
                            <tr>
                                <td>{$arr_ausencias[ausencias].id}</td>
                                <td>{$arr_ausencias[ausencias].nombre_profesor}</td>
                                <td>{$arr_ausencias[ausencias].nombre_alumno}</td>
                                <td>{$arr_ausencias[ausencias].motivo}</td>
                                <td>{$arr_ausencias[ausencias].justificada}</td>
                            </tr>
                        {/section}
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
                <h1 class="titulo">Asignar Ausencia</h1>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nota" class="custom-label">Nombre Estudiante:</label>
                        <input type="text" class="form-control custom-input" id="nombre" name="nombre"
                            placeholder="Ingrese el nombre del estudiante" required>
                        <label for="nota" class="custom-label">Apellido 1:</label>
                        <input type="text" class="form-control custom-input" id="nota" name="nota"
                            placeholder="Ingrese la nota del estudiante" minlength="1" maxlength="100" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="close_modal" id="close_modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Crear Ausencia</button>
                </div>

            </form>
        </div>
    </div>

</body>
<?php

session_start();

require_once 'libs/smarty_4_3_4/config_smarty.php';
require_once 'model/model.php';

class control {

    private $view;
    private $model;

    function __construct() {
        $this->view = new config_smarty();
        $this->model = new model();
    }

    public function gestor_procesos() {

        if (isset($_REQUEST['accion'])) {

            $accion = $_REQUEST['accion'];

            switch ($accion) {
                case 'validar_login':
                    $this->c_validar_login();
                    break;
                case 'volverI':
                    $this->volverInicio();
                    break;
                case 'crear_usuario':
                    $this->c_crear_usuario();
                    break;
                case 'borrar_usuario':
                    $this->c_borrar_usuario();
                    break;

                //crear nuevos usuarios 
                case 'crear_profesor':
                    $this->c_crear_profesor();
                    break;
                case 'crear_alumno':
                    $this->c_crear_alumno();
                    break;

                case 'borrar_profesor':
                    $this->c_borrar_profesor();
                    break;
                case 'borrar_alumno':
                    $this->c_borrar_alumno();
                    break;

                //metodos para que funcionen los enlaces a los archivos tpl.
                case 'iniciar':
                    $this->iniciarC();
                    break;
                case 'crearCuenta':
                    $this->crearC();
                    break;   
                case 'ajax':
                    $this->ajaxHandler();
                    break;    
            }
        } else {
            if (isset($_SESSION['id_usuario'])) {
                $this->c_validar_actividad();

                $this->view->setAssign("msg", ''); 
                $this->view->setAssign("usuario", $_SESSION);
                $this->view->setDisplay("menu.tpl");
            } 
            else {
                $this->view->setAssign("titulo", "Colegio Hispanoamericano");
                $this->view->setAssign("msg", "");
                $this->view->setDisplay("index.tpl");
            }
        }
    }
    
    public function c_crear_usuario() {
        
        $nombre = $_REQUEST['nombre'];
        $ap1 = $_REQUEST['ap1'];
        $ap2 = $_REQUEST['ap2'];
        $tipo_usuario = $_REQUEST['tipo_usuario'];
        $pass = $_REQUEST['pass'];
        $correo = $_REQUEST['email'];

        $respuesta = $this->model->m_registrar_nuevo_usuario($nombre, $ap1, $ap2,$tipo_usuario, $correo, $pass);
        
        if ($respuesta) {
            $usuario = array(
                'nombre' => $nombre,
                'ap1' => $ap1,
                'ap2' => $ap2,
                'tipo_usuario' => $tipo_usuario,
                'email' => $correo
            );

            $this->view->setAssign("titulo", "Colegio UH");
            $this->view->setAssign("msg", "El usuario creado correctamente");
            $this->view->setAssign("usuario", $usuario);
             switch ($tipo_usuario) {
                case '1':
                    $this->view->setDisplay("estudiante_home.tpl");
                    break;
                case '2':
                    $this->view->setDisplay("profesor_home.tpl");
                    break;
                case '3':
                    $this->view->setDisplay("admin_home.tpl");                 
                    break;
            }
            $this->ajaxHandler();
        } else {
            $this->view->setAssign("titulo", "Colegio UH");
            $this->view->setAssign("msg", "Error! creando usuario!");
            $this->view->setDisplay("crearCuenta.tpl");
        }
    }

    function c_editar_usuario(){
        $nombre = $_REQUEST['nombre'];
        $ap1 = $_REQUEST['ap1'];
        $ap2 = $_REQUEST['ap2'];
        $tipo_usuario = $_REQUEST['tipo_usuario'];
        $pass = $_REQUEST['pass'];
        $correo = $_REQUEST['email'];
    }

    function c_validar_login() {
        $correo = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];
        $tipo_usuario = $_REQUEST['tipo_usuario'];

        $rs = $this->model->m_validar_login($correo, $pass, $tipo_usuario);

        if (sizeof($rs) > 0) {
            $usuario = array(
                'id_usuario' => $rs['id_usuario'],
                'nombre' => $rs['nombre'],
                'ap1' => $rs['ape1'],
                'ap2' => $rs['ape2'],
                'tipo_usuario' => $rs['tipo_usuario'],
                'email' => $rs['correo']
            );
                // Establecer las variables de sesión
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['ap1'] = $usuario['ap1'];
            $_SESSION['ap2'] = $usuario['ap2'];
            $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];
            $_SESSION['email'] = $usuario['email'];
            
            $Arr_alumnos = $this->model->m_get_alumnos();
            $this->view->setAssign("arr_alumnos", $Arr_alumnos);
            $this->view->setAssign("msg", '');
            $this->view->setAssign("usuario", $usuario);   
            switch ($tipo_usuario) {
                case '1':
                    $this->view->setDisplay("estudiante_home.tpl");
                    break;
                case '2':
                    $this->view->setDisplay("profesor_home.tpl");                   
                    break;
                case '3':
                    $this->view->setDisplay("admin_home.tpl");                   
                    break;
            }
            $this->ajaxHandler();
        } else {
            $this->view->setAssign("titulo", "Colegio UH");
            $this->view->setAssign("msg", "Error! usuario o password invalido");
            $this->view->setDisplay("Login.tpl");
        }
    }
    
    function c_validar_actividad() {

        if (isset($_SESSION['tiempo'])) {

            $inactivo = 180; //3min en este caso.
            //Calculamos tiempo de vida inactivo.
            $vida_session = time() - $_SESSION['tiempo'];
            if ($vida_session > $inactivo) {
                header("Location: logoff.php");
                exit();
            } else {  // si no ha caducado la sesion, actualizamos
                $_SESSION['tiempo'] = time();
            }
        } else {
            $_SESSION['tiempo'] = time();
        }
    }

    public function crearCalificacion() {
        $nota_id = $_REQUEST['nota_id'];
        $materia_id = $_REQUEST['materia_id'];
        $alumno_id = $_REQUEST['alumno_id'];
        $actividad_id = $_REQUEST['actividad_id'];
        $valor_nota = $_REQUEST['valor_nota'];
        $periodo_id = $_REQUEST['periodo_id'];
        $fecha = $_REQUEST['fecha'];

        $respuesta = $this->model->registrarCalificacion($nota_id, $materia_id, $alumno_id, $actividad_id, $valor_nota, $periodo_id, $fecha);

        if ($respuesta) {
            // Éxito: Actualizar la tabla y mostrar mensaje de éxito
            $this->view->setAssign("msg", "La calificación se registró correctamente");
            $this->view->setAssign("tipo_msg", "success");
    
            // Aquí puedes volver a cargar los datos de la tabla actualizados
            $datosTabla = $this->model->obtenerDatosTabla(); // Suponiendo que hay un método para obtener los datos de la tabla
            $this->view->setAssign("datosTabla", $datosTabla);
    
            // Puedes mostrar la tabla actualizada en algún template asignado
            $this->view->setDisplay("crearNotas.tpl");
        } else {
            // Fallo: Mostrar mensaje de error
            $this->view->setAssign("msg", "Error al registrar la calificación");
            $this->view->setAssign("tipo_msg", "error");
            $this->view->setDisplay("crearNotas.tpl");
        }
    
        $this->ajaxHandler();
    }

    public function editarCalificacion() {
        $nota_id = $_REQUEST['nota_id'];
        $valor_nota = $_REQUEST['valor_nota'];
    
        $respuesta = $this->model->editarCalificacion($nota_id, $valor_nota);
    
        if ($respuesta) {
            // Éxito: Actualizar la tabla y mostrar mensaje de éxito
            $this->view->setAssign("msg", "La calificación se actualizó correctamente");
            $this->view->setAssign("tipo_msg", "success");
    
            // Volver a cargar los datos de la tabla actualizados
            $datosTabla = $this->model->obtenerDatosTabla(); // Método para obtener datos de la tabla
            $this->view->setAssign("datosTabla", $datosTabla);
    
            // Mostrar la tabla actualizada en algún template asignado
            $this->view->setDisplay("tablaCalificaciones.tpl");
        } else {
            // Fallo: Mostrar mensaje de error
            $this->view->setAssign("msg", "Error al editar la calificación");
            $this->view->setAssign("tipo_msg", "error");
            $this->view->setDisplay("formularioCalificaciones.tpl");
        }
    
        $this->ajaxHandler();
    }
    
    public function c_crear_profesor() {

        // Guardar la información de sesión actual del usuario antes de cambiar de tabla
        $usuario = array(
            'id_usuario' => $_SESSION['id_usuario'],
            'nombre' => $_SESSION['nombre'],
            'ap1' => $_SESSION['ap1'],
            'ap2' => $_SESSION['ap2'],
            'tipo_usuario' => $_SESSION['tipo_usuario'],
            'email' => $_SESSION['email']
        );
        
        $nombre = $_REQUEST['nombre'];
        $direccion = $_REQUEST['direccion'];
        $cedula = $_REQUEST['cedula'];
        $telefono = $_REQUEST['telefono'];
        $correo = $_REQUEST['correo'];
        $nivel_est = $_REQUEST['nivel_est'];
    
        // Resto del código para registrar al nuevo profesor
        $respuesta = $this->model->m_registrar_nuevo_Profesor($nombre, $direccion, $cedula, $telefono, $correo, $nivel_est);
    
        if ($respuesta) {
            // Restaurar la sesión del usuario después de crear el profesor
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['ap1'] = $usuario['ap1'];
            $_SESSION['ap2'] = $usuario['ap2'];
            $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];
            $_SESSION['email'] = $usuario['email'];

    
            // Actualizar la pantalla según el tipo de usuario que inició sesión

            $this->view->setAssign("usuario", $usuario); 
            switch ($_SESSION['tipo_usuario']) {
                case '1':
                    $this->view->setDisplay("estudiante_home.tpl");
                    break;
                case '2':
                    $this->view->setDisplay("profesor_home.tpl");
                    break;
                case '3':
                    $this->view->setDisplay("admin_home.tpl");
                    break;
                default:
                    $this->view->setDisplay("mensaje_generico.tpl");
                    break;
            }
            $this->ajaxHandler();
        } else {
            // Manejar el caso en el que la creación del profesor falla
            $this->view->setAssign("titulo", "Colegio UH");
            $this->view->setAssign("msg", "Error al registrar el profesor");
            $this->view->setDisplay("crearCuenta.tpl");
        }
    }

        // Método para borrar profesor
    public function c_borrar_profesor() {
        $profesor_id = $_REQUEST['profesor_id'];

        // Guardar la información de sesión actual del usuario antes de cambiar de tabla
        $usuario = array(
            'id_usuario' => $_SESSION['id_usuario'],
            'nombre' => $_SESSION['nombre'],
            'ap1' => $_SESSION['ap1'],
            'ap2' => $_SESSION['ap2'],
            'tipo_usuario' => $_SESSION['tipo_usuario'],
            'email' => $_SESSION['email']
        );

        $respuesta = $this->model->m_borrar_profesor($profesor_id);
        $Arr_alumnos = $this->model->m_get_alumnos();
        if ($respuesta) {
            // Restaurar la sesión del usuario después de borrar el profesor
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['ap1'] = $usuario['ap1'];
            $_SESSION['ap2'] = $usuario['ap2'];
            $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];
            $_SESSION['email'] = $usuario['email'];


            $this->view->setAssign("usuario", $usuario);
            // Actualizar la pantalla según el tipo de usuario que inició sesión
            switch ($_SESSION['tipo_usuario']) {
                case '1':
                    $this->view->setDisplay("estudiante_home.tpl");
                    break;
                case '2':
                    $this->view->setDisplay("profesor_home.tpl");
                    break;
                case '3':
                    $this->view->setDisplay("admin_home.tpl");
                    break;
                default:
                    $this->view->setDisplay("mensaje_generico.tpl");
                    break;
            }
            $this->ajaxHandler();
        } else {
            $this->view->setAssign("titulo", "Colegio UH");
            $this->view->setAssign("msg", "Error al registrar el profesor");
            $this->view->setDisplay("crearCuenta.tpl");
        }
    }


    //metodo para agregar alumno
    public function c_crear_alumno() {

        // Guardar la información de sesión actual del usuario antes de cambiar de tabla
        $usuario = array(
            'id_usuario' => $_SESSION['id_usuario'],
            'nombre' => $_SESSION['nombre'],
            'ap1' => $_SESSION['ap1'],
            'ap2' => $_SESSION['ap2'],
            'tipo_usuario' => $_SESSION['tipo_usuario'],
            'email' => $_SESSION['email']
        );
        
        $nombre_alumno = $_REQUEST['nombre_alumno'];
        $edad = $_REQUEST['edad'];
        $direccion = $_REQUEST['direccion'];
        $cedula = $_REQUEST['cedula'];
        $telefono = $_REQUEST['telefono'];
        $correo = $_REQUEST['correo'];
        $fecha_nac = $_REQUEST['fecha_nac'];
    
        // Resto del código para registrar al nuevo profesor
        $respuesta = $this->model->m_registrar_nuevo_Alumno($nombre_alumno, $edad, $direccion, $cedula, $telefono, $correo, $fecha_nac);
        $Arr_alumnos = $this->model->m_get_alumnos();
        
        
        if ($respuesta) {
            // Restaurar la sesión del usuario después de crear el profesor
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['ap1'] = $usuario['ap1'];
            $_SESSION['ap2'] = $usuario['ap2'];
            $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];
            $_SESSION['email'] = $usuario['email'];

    
            // Actualizar la pantalla según el tipo de usuario que inició sesión
            $this->view->setAssign("usuario", $usuario);
            $this->view->setAssign("arr_alumnos", $Arr_alumnos);
            
            switch ($_SESSION['tipo_usuario']) {
                case '1':
                    $this->view->setDisplay("estudiante_home.tpl");
                    break;
                case '2':
                    $this->view->setDisplay("profesor_home.tpl");
                    break;
                case '3':
                    $this->view->setDisplay("admin_home.tpl");
                    break;
                default:
                    $this->view->setDisplay("mensaje_generico.tpl");
                    break;
            }
            $this->ajaxHandler();
        } else {
            // Manejar el caso en el que la creación del profesor falla
            $this->view->setAssign("titulo", "Colegio UH");
            $this->view->setAssign("msg", "Error al registrar el profesor");
            $this->view->setDisplay("crearCuenta.tpl");
        }
    }
    
        // Método para borrar profesor
        public function c_borrar_alumno() {
            $alumno_id = $_REQUEST['alumno_id'];
    
            // Guardar la información de sesión actual del usuario antes de cambiar de tabla
            $usuario = array(
                'id_usuario' => $_SESSION['id_usuario'],
                'nombre' => $_SESSION['nombre'],
                'ap1' => $_SESSION['ap1'],
                'ap2' => $_SESSION['ap2'],
                'tipo_usuario' => $_SESSION['tipo_usuario'],
                'email' => $_SESSION['email']
            );
    
            $respuesta = $this->model->m_borrar_alumno($alumno_id);
    
            if ($respuesta) {
                // Restaurar la sesión del usuario después de borrar el profesor
                $_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['nombre'] = $usuario['nombre'];
                $_SESSION['ap1'] = $usuario['ap1'];
                $_SESSION['ap2'] = $usuario['ap2'];
                $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];
                $_SESSION['email'] = $usuario['email'];
    
    
                $this->view->setAssign("usuario", $usuario);
                // Actualizar la pantalla según el tipo de usuario que inició sesión
                switch ($_SESSION['tipo_usuario']) {
                    case '1':
                        $this->view->setDisplay("estudiante_home.tpl");
                        break;
                    case '2':
                        $this->view->setDisplay("profesor_home.tpl");
                        break;
                    case '3':
                        $this->view->setDisplay("admin_home.tpl");
                        break;
                    default:
                        $this->view->setDisplay("mensaje_generico.tpl");
                        break;
                }
                $this->ajaxHandler();
            } else {
                $this->view->setAssign("titulo", "Colegio UH");
                $this->view->setAssign("msg", "Error al registrar el profesor");
                $this->view->setDisplay("crearCuenta.tpl");
            }
        }
    
    public function ajaxHandler() {
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            
            switch ($page) {
                case 'inicio':
                    $this->inicio();
                    break;
                //contenido estudiante
                case 'calificaciones':
                    $this->notas();
                    break;
                case 'ausencias':
                    $this->ausiencias();
                    break;
                case 'listaEstudiantes':
                    $this->listaEstudiantes();
                    break;

                //Contenido profesores
                case 'listaprofes':
                    $this->listaProfes();
                    break;
                case 'calificarprofe':
                    $this->notasProfesor();
                    break;
                case 'ausenciasprofesor':
                    $this->ausienciasProfesor();
                    break;
                
                //esto es general para todos
                case 'horarios':
                    $this->horarios();
                    break;
                case 'contactenos':
                    $this->contactenos();
                    break;
                case 'mapa': 
                    $this->mapas();
                    break;
                case 'configuracion': 
                    $this->configuracion();
                    break;


                //Estos es del admin
                case 'informacion':
                    $this->informacion();
                    break;
            }
        }
    }
    
    //METODOS DE LLAMADA A PÁGINAS

    public function volverInicio(){
        $this->view->setDisplay("index.tpl");
    }
    public function iniciarC(){
        $this->view->setDisplay("Login.tpl");
    }
    public function crearC(){
        $this->view->setDisplay("crearCuenta.tpl");
    }

    //contenido de interfaces de los tipos de usuario
    public function Inicio(){
        $this->view->setDisplay("view/templates/contenido/inicio.tpl");
    }

    //contenido alumno 
    public function notas(){
        $this->view->setDisplay("view/templates/contenido/alumnos/notas.tpl");
    }

    public function ausiencias(){
        $arr_ausencias = $this->model->m_get_ausencias();
        $this->view->setAssign("arr_ausencias", $arr_ausencias);
        $this->view->setDisplay("view/templates/contenido/alumnos/Ausencias.tpl");
    }

    public function listaEstudiantes(){
        $arr_alumnos = $this->model->m_get_alumnos();
        $this->view->setAssign("arr_alumnos", $arr_alumnos);
        $this->view->setDisplay("view/templates/contenido/alumnos/listaAlumnos.tpl");
    }

    //Contenido profesor 

    public function listaProfes(){
        $arr_profesor = $this->model->m_get_profesor();
        $this->view->setAssign("arr_profesor", $arr_profesor);
        $this->view->setDisplay("view/templates/contenido/profesor/listaProfesores.tpl");
    }

    public function notasProfesor(){
        $this->view->setDisplay("view/templates/contenido/profesor/crearNotas.tpl");
    }

    public function ausienciasProfesor(){
        $arr_ausencias = $this->model->m_get_ausencias();
        $this->view->setAssign("arr_ausencias", $arr_ausencias);
        $this->view->setDisplay("view/templates/contenido/profesor/crearAusencias.tpl");
    }

    //general
    public function horarios(){
        $arr_horario = $this->model->m_get_horarios();
        $this->view->setAssign("arr_horario", $arr_horario);
        $this->view->setDisplay("view/templates/contenido/horarios.tpl");
    }

    public function contactenos(){
        $this->view->setDisplay("view/templates/contenido/contactenos.tpl");
    }
    public function mapas(){
        $this->view->setDisplay("view/templates/contenido/mapa.tpl");
    }

    public function configuracion(){
        $arr_usuarios = $this->model->m_get_usuarios();
        $this->view->setAssign('arr_usuarios',$arr_usuarios);
        $this->view->setDisplay("view/templates/contenido/configuracion.tpl");
    }



    //administrador
    public function informacion(){
        $arr_alumnos = $this->model->m_get_alumnos();
        $this->view->setAssign("arr_alumnos", $arr_alumnos);

        $arr_profesor = $this->model->m_get_profesor();
        $this->view->setAssign("arr_profesor", $arr_profesor);

        $this->view->setDisplay("view/templates/contenido/informacion.tpl");
    }

}

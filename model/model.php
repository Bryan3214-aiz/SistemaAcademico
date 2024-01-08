<?php

require_once 'conn/conn.php';

class model {

    private $ins_conn;

    public function __construct() {
        $this->ins_conn = new conn();
    }

    public function m_validar_login($correo, $pass,$tipo_usuario) {
        $this->ins_conn->conectar();

        $sql = "SELECT id_usuario,nombre,ape1,ape2,tipo_usuario,correo,pass,fecha_creacion
        FROM usuarios 
        WHERE correo='$correo'
        AND pass = md5('uh$$2023_$pass') AND tipo_usuario = ('$tipo_usuario')";

        $rs = $this->ins_conn->ejecutarSQL($sql);

        $data = array();
        while ($fila = $rs->fetch_assoc()) {
            $data['id_usuario'] = $fila['id_usuario'];
            $data['nombre'] = $fila['nombre'];
            $data['ape1'] = $fila['ape1'];
            $data['ape2'] = $fila['ape2'];
            $data['tipo_usuario'] = $fila['tipo_usuario'];
            $data['correo'] = $fila['correo'];
        }

        $this->ins_conn->desconectar();

        return $data;
    }

    public function m_borrar_usuario($id_usuario) {
        $this->ins_conn->conectar();
        $sql = "delete from usuarios where id_usuario=$id_usuario";
        $rs = $this->ins_conn->ejecutarSQL($sql);

        $this->ins_conn->aplicar();
        $this->ins_conn->desconectar();
        return $rs;
    }

    public function m_get_usuarios() {
        $this->ins_conn->conectar();

        $sql = "SELECT id_usuario,nombre,ape1,ape2,tipo_usuario,correo,pass,fecha_creacion
        FROM usuarios";

        $rs = $this->ins_conn->ejecutarSQL($sql);

        $arrusuarios = array();
        while ($fila = $rs->fetch_assoc()) {
            $data = array();
            $data['id_usuario'] = $fila['id_usuario'];
            $data['nombre'] = $fila['nombre'];
            $data['ape1'] = $fila['ape1'];
            $data['ape2'] = $fila['ape2'];
            $data['tipo_usuario'] = $fila['tipo_usuario'];
            $data['correo'] = $fila['correo'];
            $arrusuarios[] = $data;
        }

        $this->ins_conn->desconectar();

        return $arrusuarios;
    }

    public function m_validar_correo($correo) {
        $this->ins_conn->conectar();

        $sql = "SELECT id_usuario,nombre,ape1,ape2,tipo_usuario,correo,pass,fecha_creacion
        FROM usuarios 
        WHERE correo='$correo'";

        $rs = $this->ins_conn->ejecutarSQL($sql);

        $data = array();
        while ($fila = $rs->fetch_assoc()) {
            $data['id_usuario'] = $fila['id_usuario'];
            $data['nombre'] = $fila['nombre'];
            $data['ape1'] = $fila['ape1'];
            $data['ape2'] = $fila['ape2'];
            $data['tipo_usuario'] = $fila['tipo_usuario'];
            $data['correo'] = $fila['correo'];
        }

        $this->ins_conn->desconectar();

        return $data;
    }

    public function m_registrar_nuevo_usuario($nombre, $ape1, $ape2, $tipo_usuario, $correo, $pass) {
        $val = $this->m_validar_correo($correo);
        if (sizeof($val) == 0) {
            $this->ins_conn->conectar();
            $sql = "insert into usuarios(nombre,ape1,ape2,tipo_usuario,correo,pass)";
            $sql .= " values('$nombre','$ape1','$ape2','$tipo_usuario','$correo',md5('uh$$2023_$pass'))";
            $rs = $this->ins_conn->ejecutarSQL($sql);
            $this->ins_conn->aplicar();
            $this->ins_conn->desconectar();
            return $rs;
        } else {
            return false;
        }
    }
    //profesor
    public function m_registrar_nuevo_profesor($nombre, $direccion, $cedula, $telefono, $correo, $nivel_est) {
        $val = $this->m_validar_correo($correo);
        if (sizeof($val) == 0) {
        $this->ins_conn->conectar();
        $sql = "INSERT INTO profesor(nombre, direccion, cedula, telefono, correo, nivel_est)";
        $sql .= " VALUES ('$nombre', '$direccion', '$cedula', '$telefono', '$correo', '$nivel_est')";
        $rs = $this->ins_conn->ejecutarSQL($sql);
        $this->ins_conn->aplicar();
        $this->ins_conn->desconectar();
        return $rs;
        }else{
            return false;
        }
    }

    public function m_borrar_profesor($profesor_id) {
        $this->ins_conn->conectar();
        $sql = "DELETE FROM profesor WHERE profesor_id = '$profesor_id'";
        $rs = $this->ins_conn->ejecutarSQL($sql);
        $this->ins_conn->aplicar();
        $this->ins_conn->desconectar();
        return $rs;
    }

    //alumnos
    public function m_registrar_nuevo_Alumno($nombre_alumno, $edad, $direccion, $cedula, $telefono, $correo, $fecha_nac) {
        $val = $this->m_validar_correo($correo);
        if (sizeof($val) == 0) {
        $this->ins_conn->conectar();
        $sql = "INSERT INTO alumnos(nombre_alumno, edad, direccion, cedula, telefono, correo, fecha_nac)";
        $sql .= " VALUES ('$nombre_alumno', '$edad', '$direccion', '$cedula', '$telefono', '$correo', '$fecha_nac')";
        $rs = $this->ins_conn->ejecutarSQL($sql);
        $this->ins_conn->aplicar();
        $this->ins_conn->desconectar();
        return $rs;
        }else{
            return false;
        }
    }

    public function m_borrar_alumno($alumno_id) {
        $this->ins_conn->conectar();
        $sql = "DELETE FROM alumnos WHERE alumno_id = '$alumno_id'";
        $rs = $this->ins_conn->ejecutarSQL($sql);
        $this->ins_conn->aplicar();
        $this->ins_conn->desconectar();
        return $rs;
    }

    public function m_get_alumnos() {
        $this->ins_conn->conectar();
    
        $sql = "SELECT alumno_id, nombre_alumno, edad, direccion, cedula, telefono, correo, fecha_nac, fecha_registro
        FROM alumnos";
    
        $rs = $this->ins_conn->ejecutarSQL($sql);
    
        $arrAlumnos = array();
        while ($fila = $rs->fetch_assoc()) {
            $arrAlumnos[] = array(
                'alumno_id' => $fila['alumno_id'],
                'nombre_alumno' => $fila['nombre_alumno'],
                'edad' => $fila['edad'],
                'direccion' => $fila['direccion'],
                'cedula' => $fila['cedula'],
                'telefono' => $fila['telefono'],
                'correo' => $fila['correo'],
                'fecha_nac' => $fila['fecha_nac'],
                'fecha_registro' => $fila['fecha_registro']
            );
        }
    
        $this->ins_conn->desconectar();
 
        return $arrAlumnos;
    }

    public function m_get_profesor() {
        $this->ins_conn->conectar();
    
        $sql = "SELECT profesor_id, nombre, direccion, cedula, telefono, correo, nivel_est
        FROM profesor";
    
        $rs = $this->ins_conn->ejecutarSQL($sql);
    
        $arrprofesor = array();
        while ($fila = $rs->fetch_assoc()) {
            $arrprofesor[] = array(
                'profesor_id' => $fila['profesor_id'],
                'nombre' => $fila['nombre'],
                'direccion' => $fila['direccion'],
                'cedula' => $fila['cedula'],
                'telefono' => $fila['telefono'],
                'correo' => $fila['correo'],
                'nivel_est' => $fila['nivel_est'],
            );
        }
    
        $this->ins_conn->desconectar();
 
        return $arrprofesor;
    }

    public function m_get_horarios() {
        $this->ins_conn->conectar();
    
        $sql = "SELECT profesor,curso,dia,horario
        FROM horarios";
    
        $rs = $this->ins_conn->ejecutarSQL($sql);
    
        $arrhorario = array();
        while ($fila = $rs->fetch_assoc()) {
            $arrhorario[] = array(
                'profesor' => $fila['profesor'],
                'curso' => $fila['curso'],
                'dia' => $fila['dia'],
                'horario' => $fila['horario'],
            );
        }
    
        $this->ins_conn->desconectar();
 
        return $arrhorario;
    }

    public function m_get_ausencias() {
        $this->ins_conn->conectar();
    
        $sql = "SELECT id, nombre_profesor, nombre_alumno, motivo, justificada
        FROM ausencia";
    
        $rs = $this->ins_conn->ejecutarSQL($sql);
    
        $arrausencias = array();
        while ($fila = $rs->fetch_assoc()) {
            $arrausencias[] = array(
                'id' => $fila['id'],
                'nombre_profesor' => $fila['nombre_profesor'],
                'nombre_alumno' => $fila['nombre_alumno'],
                'motivo' => $fila['motivo'],
                'justificada' => $fila['justificada'],
            );
        }
    
        $this->ins_conn->desconectar();
 
        return $arrausencias;
    }
    

    
    public function registrarCalificacion($nota_id, $materia_id, $alumno_id, $actividad_id, $valor_nota, $periodo_id) {
        // Aquí puedes realizar validaciones si es necesario antes de la inserción

        $this->ins_conn->conectar();
        $sql = "INSERT INTO nombre_de_tabla(nota_id, materia_id, alumno_id, actividad_id, valor_nota, periodo_id, fecha)";
        $sql .= " VALUES ('$nota_id', '$materia_id', '$alumno_id', '$actividad_id', '$valor_nota', '$periodo_id')";
        
        $rs = $this->ins_conn->ejecutarSQL($sql);
        $this->ins_conn->aplicar();
        $this->ins_conn->desconectar();

        return $rs;
    }
}

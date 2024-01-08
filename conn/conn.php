<?php
//mysqli

class conn{
    
    private $usuario;
    private $pass;
    private $server;
    private $nombreDB;
    
    private $link;
    
    public function __construct() {
        
        $this->usuario = "root";
        $this->pass    = "";
        $this->server  = "localhost";
        $this->nombreDB= "proyectobvt";        
    }    
    public function conectar() {
        //$link = mysqli_connect("localhost", "root", "", "test");
        $this->link = new mysqli($this->server,$this->usuario,$this->pass,$this->nombreDB);
        
       if ($this->link->connect_error) {
            echo "error de conexion a la DB!";   
            exit;
        }        
    }

    public function ejecutarSQL($sql) {
        $rs = $this->link->query($sql);   
        return  $rs;  
    }
    
    public function desconectar() {
        
        mysqli_close($this->link);
    }    
    
    
    public function aplicar() {
       mysqli_commit($this->link); 
    }
    
    
}


?>

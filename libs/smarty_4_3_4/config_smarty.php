<?php

require_once 'libs/smarty_4_3_4/Smarty.class.php';

class config_smarty{
    
    private $objSmarty;
    
    function __construct(){        
        $this->objSmarty = new Smarty();
        $this->setRutas();
    }

    public function setRutas(){    
        $this->objSmarty->template_dir = 'view/templates/';
        $this->objSmarty->compile_dir  = 'view/templates_c/';
        $this->objSmarty->config_dir   = 'control/configs';
        $this->objSmarty->cache_dir    = 'control/cache';
    }
    
    public function setAssign($nombre_variable, $valor){
        $this->objSmarty->assign($nombre_variable, $valor); 
    }
    public function setDisplay($nombre_archivo){
        $this->objSmarty->display($nombre_archivo);  
    }     
}

?>

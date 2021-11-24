<?php
require_once "libs/smarty/libs/Smarty.class.php";

class CategoriaView{
    private $smarty;

    function __construct($IsUserLogged,$IsAdmin) {
        $this->smarty = new Smarty();
        $this->smarty->assign('IsUserLogged',$IsUserLogged);
        $this->smarty->assign('IsAdmin',$IsAdmin);
    }

    function mostrarCategorias($categorias,$error=""){        
        $this->smarty->assign('categorias',$categorias); 
        $this->smarty->assign('error',$error);       
        $this->smarty->display('templates/categorias.tpl');
    }
    
    function showEditFormCateg($categoria,$error=""){
        $this->smarty->assign('categoria',$categoria);
        $this->smarty->assign('error',$error);  
        $this->smarty->display('templates/formEditCateg.tpl');
    }
}
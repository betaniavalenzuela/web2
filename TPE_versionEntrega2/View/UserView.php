<?php
require_once "libs/smarty/libs/Smarty.class.php";

class UserView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function mostrarUsuarios($usuarios){
        $this->smarty->assign('usuarios',$usuarios);
        $this->smarty->display('templates/usuarios.tpl');
    }
}
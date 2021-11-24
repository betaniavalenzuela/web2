<?php
require_once "libs/smarty/libs/Smarty.class.php";

class LoginView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showLogin($error=""){
        $this->smarty->assign('titulo', 'Log in');
        $this->smarty->assign('error', $error); 
        $this->smarty->display('templates/login.tpl');        
    }
    function showHome(){
        header("Location: ".BASE_URL."home");
    }
}
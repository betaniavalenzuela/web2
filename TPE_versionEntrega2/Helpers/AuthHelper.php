<?php
class AuthHelper
{
    function __construct()
    {
        
    }
    
    function isAdmin()
    {
        if (!isset($_SESSION)){
            session_start();
            if (isset($_SESSION["nombre"])){
                if($_SESSION["admin"] === "1"){
                    return true;
                }
                else{
                    return false;
                }
            }
        }else{
            if (isset($_SESSION["nombre"])){
                if($_SESSION["admin"] === "1"){
                    return true;
                }
                else{
                    return false;
                }
            }
        }      
        
    }


    function isUserLogged(){
        if (!isset($_SESSION)){
            session_start();
            if (isset($_SESSION["nombre"])) {
                return true;
            }       
            else{
                return false;
            }
        }else{
            if (isset($_SESSION["nombre"])) {
                return true;
            }       
            else{
                return false;
            }
        }    
    }  

}

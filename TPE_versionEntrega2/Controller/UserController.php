<?php
require_once "./View/UserView.php";
require_once "./View/LoginView.php";
require_once "./Model/UserModel.php";
require_once "./Helpers/AuthHelper.php";


class UserController
{
    private $viewUser;
    private $model;
    private $authHelper;
    private $view;

    function __construct()
    {
        $this->model = new UserModel();
        $this->viewUser = new UserView();
        $this->authHelper = new AuthHelper();
        $this->view = new LoginView();
    }

    function listarUsuarios()
    {
        if ($this->authHelper->isAdmin()) {
            $usuarios = $this->model->getAllUser();
            $this->viewUser->mostrarUsuarios($usuarios);
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function borrarUsuario($id)
    {
        if ($this->authHelper->isAdmin()) {
            $this->model->deleteUser($id);
            header("Location: " . BASE_URL . "listarUsers");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function convertirEnAdmin($id)
    {
        if ($this->authHelper->isAdmin()) {
            $this->model->convertirEnAdmin($id, 1);
            header("Location: " . BASE_URL . "listarUsers");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }

    function quitarPermisosAdmin($id)
    {
        if ($this->authHelper->isAdmin()) {
            $this->model->convertirEnAdmin($id, 0);
            header("Location: " . BASE_URL . "listarUsers");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }
    
    function getUser()
    {
        if (isset($_SESSION['id_user'])) {
            $id_user = $_SESSION['id_user'];
            $userDates = $this->model->getUserID($id_user);
            return $userDates;
        }
    }

    function registrarUsuario()
    {
        if ((!empty($_POST['nombre_usuario'])) && (!empty($_POST['email'])) && (!empty($_POST['contraseña']))) {
            $nombre_usuario = $_POST['nombre_usuario'];
            $email = $_POST['email'];
            $contraseña =  $_POST['contraseña'];

            $existeUsuario = $this->model->getUserInfo($email);
            if (!$existeUsuario) {
                $hash = password_hash($contraseña, PASSWORD_DEFAULT);
                $this->model->saveUserInDDBB($nombre_usuario, $email, $hash);
                $usuario = $this->model->getUserInfo($email);
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["nombre"] = $usuario->nombre_usuario;
                $_SESSION["id_user"] = $usuario->id_usuario;
                $_SESSION["admin"]  = $usuario->rol_admin;
                //con el array $_SESSION accedo a los datos guardados en la sesion
                header('Location: ' . BASE_URL . "home");
                die(); //Luego de una redirección se suele llamar a la función die() para forzar terminar la ejecución del script.
            } else {
                $this->view->showLogin("El mail ingresado no esta disponible");
                die();
            }
        } else {
            $this->view->showLogin("Faltan completar algunos campos");
        }
    }
}

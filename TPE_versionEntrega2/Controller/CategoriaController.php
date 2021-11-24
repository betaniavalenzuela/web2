<?php
require_once "./View/CategoriaView.php";
require_once "./Model/CategoriaModel.php";
require_once "./Helpers/AuthHelper.php";

class CategoriaController
{
    private $viewCateg;
    private $modelCateg;
    private $authHelper;

    function __construct()
    {
        $this->modelCateg = new CategoriaModel();        
        $this->authHelper = new AuthHelper();
        $IsUserLogged = $this->authHelper->isUserLogged();
        $IsAdmin = $this->authHelper->isAdmin();
        $this->viewCateg = new CategoriaView($IsUserLogged,$IsAdmin);
    }

    function showCategorias()
    {         
        $categorias = $this->modelCateg->getCategorias();
        $this->viewCateg->mostrarCategorias( $categorias);
    }

    function createCateg()
    {
        if ($this->authHelper->isAdmin()) {
            if (
                isset($_POST["categoria"]) && $_POST["categoria"] != "" &&
                $_POST["descripcion"] && $_POST["descripcion"] != ""
            ) {
                $this->modelCateg->createCateg($_POST["categoria"], $_POST["descripcion"]);
                header("Location: " . BASE_URL . "categorias");
            }
            else{
                $categorias = $this->modelCateg->getCategorias();
                $this->viewCateg->mostrarCategorias($categorias,"Faltan completar campos");
            }
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }

    function deleteCateg($id)
    {
        if ($this->authHelper->isAdmin()) {
            $this->modelCateg->deleteCateg($id);
            header("Location: " . BASE_URL . "categorias");
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }
    
    function editCateg($id)
    {
        if ($this->authHelper->isAdmin()) {
            $categoria = $this->modelCateg->getCategory($id);
            $this->viewCateg->showEditFormCateg($categoria);
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }

    function updateCategory($id)
    {
        if ($this->authHelper->isAdmin()) {
            if (
                isset($_POST["categoria"]) && $_POST["categoria"] != "" &&
                $_POST["descripcion"] && $_POST["descripcion"] != ""
            ) {
                $this->modelCateg->updateCategDB($_POST["categoria"], $_POST["descripcion"], $id);
                header("Location: " . BASE_URL . "categorias");
            }
            else{
                $categoria = $this->modelCateg->getCategory($id);                
                $this->viewCateg->showEditFormCateg($categoria,"Faltan completar campos");
            }
        
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }
}

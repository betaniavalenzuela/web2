<?php
require_once "./View/ProductView.php";
require_once "./Model/ProductModel.php";
require_once "./Model/CategoriaModel.php";
require_once "./Model/UserModel.php";
require_once "./Helpers/AuthHelper.php";

class ProductoController
{
    private $viewProduct;
    private $modelUser;
    private $modelProduct;
    private $authHelper;

    function __construct()
    {
        $this->modelProduct = new ProductModel();        
        $this->modelUser = new UserModel();
        $this->modelCateg = new CategoriaModel();
        $this->authHelper = new AuthHelper();
        $IsUserLogged = $this ->authHelper-> isUserLogged();
        $IsAdmin = $this ->authHelper-> isAdmin(); 
        $this->viewProduct = new ProductView($IsUserLogged,$IsAdmin);
    }

    function showHome(){                   
        $productos = $this->modelProduct->getProductos();
        $categorias = $this->modelCateg->getCategorias();    
        $this->viewProduct->mostrarProductos( $productos, $categorias);
    }

    function showDetail($id){         
        $producto = $this->modelProduct->getProduct($id);
        $this->viewProduct->showProd($producto);
    }

    function listProductBy($categoria)
    {
        $categorias = $this->modelProduct->getProductsBy($categoria);
        $this->viewProduct->showProductsBy($categorias);
    }

    function addProduct()
    {
        if ($this->authHelper->isAdmin()) {
            if(isset($_POST["nombre"]) && $_POST["nombre"] != ""&&
                $_POST["cantidad"] && $_POST["cantidad"] != "" &&
                $_POST["precio"] && $_POST["precio"] != "" &&
                $_POST["categoria"] && $_POST["categoria"] != ""){
                    
                $this->modelProduct->addProduct($_POST['nombre'], $_POST['cantidad'], $_POST['precio'], $_POST['categoria']);
                header("Location: " . BASE_URL . "home");
                die();
            }
            else{            
                $productos = $this->modelProduct->getProductos();
                $categorias = $this->modelCateg->getCategorias();    
                $this->viewProduct->mostrarProductos( $productos, $categorias,"Faltan completar campos");
            }
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }

    function editProduct($id)
    {
        if ($this->authHelper->isAdmin()) {
            $producto = $this->modelProduct->getProduct($id); //pido el prod para poner el value
            $categorias = $this->modelCateg->getCategorias(); //pido las categ para que las muestre el select
            $this->viewProduct->showEditForm($categorias, $producto);
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }

    function editProductDB($id)
    {
        if ($this->authHelper->isAdmin()) {
            if(isset($_POST["nombre"]) && $_POST["nombre"] != ""&&
                $_POST["cantidad"] && $_POST["cantidad"] != "" &&
                $_POST["precio"] && $_POST["precio"] != "" &&
                $_POST["categoria"] && $_POST["categoria"] != ""){

                $this->modelProduct->updateProd($_POST["nombre"], $_POST["cantidad"], $_POST["precio"], $_POST["categoria"], $id);
                header("Location: " . BASE_URL . "home");
            } 
            else{
                $producto = $this->modelProduct->getProduct($id); //pido el prod para poner el value
                $categorias = $this->modelCateg->getCategorias(); //pido las categ para que las muestre el select
                $this->viewProduct->showEditForm($categorias, $producto, "faltan completar campos");
            }  
        }else {
            header("Location: " . BASE_URL . "login");
        }
    }
    
    function deleteProduct($id){
        if ($this->authHelper->isAdmin()) {
            $this->modelProduct->deleteProd($id);
            header("Location: " . BASE_URL . "home");
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }   
}
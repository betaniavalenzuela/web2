<?php
require_once "./Controller/ProductoController.php";
require_once "./Controller/UserController.php";
require_once "./Controller/CategoriaController.php";
require_once "./Controller/LoginController.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET["action"])) {    
    $action = $_GET["action"];
} else {   
    $action = "home";
};

$params = explode('/', $action);

$productoControlador = new ProductoController();
$categController = new CategoriaController();
$loginControlador = new LoginController();
$adminControlador = new UserController();

switch ($params[0]) {
    case 'login':
        $loginControlador->login();
        break;

    case 'logout':
        $loginControlador->logout();
        break;

    case 'verify':
        $loginControlador->verifyLogin();
        break;

    case 'home':
        $productoControlador->showHome();
        break; 
        
    case 'categorias':
        $categController->showCategorias();
        break;

    case 'createCateg':
        $categController->createCateg();
        break;

    case 'borrar':
        $categController->deleteCateg($params[1]);
        break;

    case 'edit':
        $categController->editCateg($params[1]); //EDITA CATEGORIA
        break;

    case 'editCateg':
        $categController->updateCategory($params[1]); //es el accion del form QUE TIENE UN pararametro(id)
        break;

    case 'producto':
        $productoControlador->showDetail($params[1]);
        break;

    case 'Categoria':
        $productoControlador->listProductBy($params[1]);
        break;

    case 'createProd':
        $productoControlador->addProduct();
        break;

    case 'borrarProd':
        $productoControlador->deleteProduct($params[1]);
        break;     

    case 'editar':
        $productoControlador->editProduct($params[1]); //EDITA EL PRODUCTO
        break;

    case 'editProd':
        $productoControlador->editProductDB($params[1]); 
        break;

    case 'registerUser':
        $adminControlador->registrarUsuario();
        break;
    
    case 'listarUsers':
        $adminControlador->listarUsuarios(); 
        break;    

    case 'borrarUser':
        $adminControlador->borrarUsuario($params[1]); 
        break;

    case 'convertirEnAdmin':
        $adminControlador->convertirEnAdmin($params[1]); 
        break;

    case 'quitarPermisosAdmin':
        $adminControlador->quitarPermisosAdmin($params[1]); 
        break;
        
    default:
        break;
}

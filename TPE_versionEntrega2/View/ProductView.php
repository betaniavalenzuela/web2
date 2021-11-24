<?php
require_once "libs/smarty/libs/Smarty.class.php";

class ProductView{
    private $smarty;

    function __construct($IsUserLogged,$IsAdmin) {
        $this->smarty = new Smarty();
        $this->smarty->assign('IsUserLogged',$IsUserLogged);
        $this->smarty->assign('IsAdmin',$IsAdmin);

    }

    //muestra los productos en el home
    function mostrarProductos($productos,$categorias, $error=""){       
        $this->smarty->assign('titulo', 'Estos son nuestros productos');      
        $this->smarty->assign('error',$error);
        $this->smarty->assign('productos',$productos);
        $this->smarty->assign('categorias',$categorias);      

        $this->smarty->display('templates/productos.tpl');
    }

    //muestra el detalle de cada producto y los comentarios de ese producto
    function showProd($producto){   
        $this->smarty->assign('producto',$producto);        
        $this->smarty->display('templates/detailProduct.tpl');        
    }
    //ver lo del id
    function showComentsProd(){        
       // $this->smarty->assign('id',$id);  
        $this->smarty->display('templates/comentProduct.tpl');
    }    

    function showProductsBy($categorias){
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('templates/prodByCategory.tpl');
    }

    //muestra el formulario para editar un producto
    function showEditForm($categorias,$producto,$error=""){
        $this->smarty->assign('producto',$producto);
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/formEditProduct.tpl');        
    }

    function showFormComentarios($producto,$usuario){
        $this->smarty->assign('producto',$producto);
        $this->smarty->assign('usuario',$usuario);
        $this->smarty->display('templates/formComentProduct.tpl');
    }


  
}
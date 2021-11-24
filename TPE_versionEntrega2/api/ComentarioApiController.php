<?php
require_once "./Model/ComentarioModel.php";
require_once "./api/ApiView.php";

class ComentarioApiController{
    private $modelComentario;
    private $view;
    


// Lee la variable asociada a la entrada estandar y la convierte en JSON


    function __construct(){
        $this->modelComentario = new ComentarioModel();
        $this->view = new ApiView();
        
    }

    function getBody(){ 
        $bodyString= file_get_contents("php://input");
        return json_decode($bodyString); 
    } 


    public function getAllComentarios($params = null){//buena practica poner $param aunque no lo usemos
        $comentarios = $this->modelComentario->getComentarios();  
        if(!empty($comentarios)){
            $this->view->response($comentarios, 200);
        }else{
            $this->view->response("No hay mensajes disponibles", 404);
        }
    }

    //
    public function getComent($params = null){
        $id = $params[':ID'];
        $coment = $this->modelComentario->getComent($id);
        if (!empty($coment)){
            $this->view->response($coment, 200);
        }
        else {
            $this->view->response("El comentario no existe", 404);
        }
    }
    function deleteComent($params = null){
        $id = $params[':ID'];
        $comentario= $this->modelComentario->getComentario($id);
        if($comentario){
            $this->modelComentario->deleteComent($id);
            $this->view->response("El comentario con el id=$id fue eliminado", 200);
        }
        else{
            $this->view->response("El comentario con el id=$id no existe", 404);
        }        
    }

    
    function addComent(){
        $body=$this->getBody();
        $idUsuario = $body->id_usuario;
        $idProducto = $body->id_producto;
        $comentario = $body->comentario;
        $puntaje = $body->puntaje;


        $coment=$this->modelComentario->addComent($idUsuario, $idProducto, $comentario, $puntaje);
        if($coment){
            $this->view->response("Comentario agregado",200);
        }else { 
            $this->view->response("Comentario no agregado",500);
        }

    }


}
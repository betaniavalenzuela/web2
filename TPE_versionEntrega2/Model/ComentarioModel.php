<?php

class ComentarioModel{
    private $db;

    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_laspulpas;charset=utf8','root','');
    }

    function getComentarios(){
        $sentencia= $this->db->prepare("SELECT a.nombre_usuario, a.id_usuario, 
            b.id_comentario, b.id_usuario, b.id_producto, b.puntaje, b.comentario 
            FROM usuario a
            INNER JOIN comentario b
            WHERE  a.id_usuario = b.id_usuario" );
        $sentencia->execute();
        $comentarios=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function getComentario($id){
        $sentencia= $this->db->prepare ("SELECT *FROM comentario WHERE id_comentario=?");
        $sentencia->execute(array($id));
        $comentario=$sentencia->fetch(PDO::FETCH_OBJ);
        return $comentario;
    }

//TRAE LOS COMENTARIOS DE UN PRODUCTO DETERMINADO
    function getComent($id){
        $sentencia= $this->db->prepare("SELECT a.id_comentario, a.id_usuario, a.id_producto, a.puntaje, a.comentario,
        b.id_usuario, b.nombre_usuario, b.email, 
        c.id_producto, c.nombre_producto 
        FROM comentario a 
        INNER JOIN usuario b ON a.id_usuario = b.id_usuario 
        INNER JOIN producto c ON c.id_producto =a.id_producto 
        WHERE a.id_producto=?");
        $sentencia->execute(array($id));
        $comentario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentario;
    }

    function deleteComent($id){        
        $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
        $sentencia->execute(array($id));
    }

    function addComent($idusuario, $idProducto, $comentario, $puntaje){
        $sentencia = $this->db->prepare("INSERT INTO comentario(id_usuario, id_producto, comentario, puntaje) VALUES(?,?,?,?)");
        $sentencia->execute(array($idusuario, $idProducto, $comentario, $puntaje));
        return $this ->db ->lastInsertId();       
    }    
}
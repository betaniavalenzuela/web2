<?php
class UserModel{
    private $db;

    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_laspulpas;charset=utf8','root','');
    }

    function getUser($email){
        $sentencia = $this->db->prepare('SELECT * FROM usuario WHERE email = ?');
        $sentencia->execute([$email]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getUserID($id_usuario){
        $sentencia = $this->db->prepare('SELECT * FROM usuario WHERE id_usuario = ?');
        $sentencia->execute([$id_usuario]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getUserInfo($mail){
        $sentencia = $this->db->prepare('SELECT * FROM usuario WHERE email=?');
        $sentencia->execute(array($mail));
        $datos=$sentencia->fetch(PDO::FETCH_OBJ);
        return $datos;
    }

    function deleteUser($id_usuario){
        $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id_usuario = ?");
        $sentencia->execute(array($id_usuario));
    }

    function getAllUser(){
        $sentencia = $this->db->prepare('SELECT * FROM usuario ');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function saveUserInDDBB($nombre_usuario, $email, $hash){
        $sentencia = $this->db->prepare("INSERT INTO usuario(nombre_usuario, email, password) VALUES(?,?,?)");
        $sentencia->execute(array($nombre_usuario, $email, $hash));
        return $sentencia->rowCount();
    }
    
    function convertirEnAdmin($id_usuario, $isAdmin){
        $sentencia= $this->db->prepare("UPDATE usuario SET rol_admin = ? WHERE id_usuario = ? ");
        $sentencia->execute(array($isAdmin, $id_usuario));
    }    
}

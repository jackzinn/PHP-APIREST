<?php

include '../../conexao/Conexao.php';

class userModel extends Conexao {
    
    private $idUser;
    private $name;
    private $email;
    private $password;
    
    //GETTER AND SETTERS
    //ID DE USUARIOS
    function getIdUser(){
        return $this->idUser;
    }
    function setIdUser($idUser){
        $this->idUser = $idUser;
    }
    //fim
    //
    //NAME USUARIOS
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    }
    //fim
    //
    //EMAIL USUARIOS
    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this->email = $email;
    }
    //fim
    //
    //PASSWORD
    function getPassword(){
        return $this->password;
    }
    function setPassword($password){
        $this->password = $password;
    }
    //fim
    
    public function read(){
        
        $sql = 'SELECT * FROM user';
        $consulta = Conexao::prepare($sql);
        $consulta->execute();

        return $consulta->fetchAll();
    }

    public function create($obj){

        $sql = 'INSERT INTO user (`name`,`email`, `password`) VALUES (:name, :email, :password)';
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('name', $obj->name);
        $consulta->bindValue('email', $obj->email);
        $consulta->bindValue('password', md5($obj->password));
        
        return $consulta->execute();
    }

    public function update($obj, $idUser = null){

        $sql = 'UPDATE user SET name = :name, email = :email, password = :password WHERE idUser = :idUser';
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('name', $obj->name);
        $consulta->bindValue('email', $obj->email);
        $consulta->bindValue('password', md5($obj->password));
        $consulta->bindValue('idUser', $idUser);
        
        return $consulta->execute();
    }

    public function delete($idUser = null) {

        $sql = "DELETE FROM user WHERE `idUser` = :idUser";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('idUser', $idUser);

        $consulta->execute();
    }

    public function readById($idUser = null) {

        $sql = 'SELECT * FROM user WHERE `idUser` = :idUser';
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('idUser', $idUser);
        $consulta->execute();

        return $consulta->fetch();
    }

}


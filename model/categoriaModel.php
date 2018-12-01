<?php

include '../../conexao/Conexao.php';

class categoriaModel extends Conexao {
    
    private $idCategory;
    private $name;
    private $slug;

    //GETTER AND SETTERS
    //ID DE USUARIOS
    function getIdCategory(){
        return $this->idCategory;
    }
    function setIdCategory($idCategory){
        $this->idCategory = $idCategory;
    }
    ////////////////////////////////////
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    }
    ////////////////////////////////////
    function getSlug(){
        return $this->slug;
    }
    function setSlug($slug){
        $this->slug = $slug;
    }
    ////////////////////////////////////
    //create category
    public function create($obj){

        $sql = 'INSERT INTO category (`name`, `slug`) VALUES (:name, :slug)';
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('name', $obj->name);
        $consulta->bindValue('slug', $obj->slug);
        
        return $consulta->execute();
    }

    //read category
    public function read(){
        
        $sql = 'SELECT * FROM category';
        $consulta = Conexao::prepare($sql);
        $consulta->execute();

        return $consulta->fetchAll();
    }

    //update category
    public function update($obj, $idCategory = null){

        $sql = 'UPDATE category SET name = :name, slug = :slug WHERE idCategory = :idCategory';
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('name', $obj->name);
        $consulta->bindValue('slug', $obj->slug);
        $consulta->bindValue('idCategory', $idCategory);
        
        return $consulta->execute();
    }

    //delete category
    public function delete($idCategory = null) {

        $sql = "DELETE FROM category WHERE `idCategory` = :idCategory";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('idCategory', $idCategory);

        $consulta->execute();
    }
    //readbyid category
    public function readById($idCategory = null) {

        $sql = 'SELECT * FROM category WHERE `idCategory` = :idCategory';
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('idCategory', $idCategory);
        $consulta->execute();

        return $consulta->fetch();
    }

}


?>


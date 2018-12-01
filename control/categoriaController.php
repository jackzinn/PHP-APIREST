<?php

include '../../model/categoriaModel.php';

class categoriaController {
    
    function read(){
        $categoriaModel = new categoriaModel();
        return $categoriaModel->read();
    }
    
    function create($obj){
        $categoriaModel = new categoriaModel();
        return $categoriaModel->create($obj);
        header('Location:read.php');
    }
    
    function update($obj, $id){
        $categoriaModel = new categoriaModel();
        return $categoriaModel->update($obj, $id);
    }
    
    function delete($id){
        $categoriaModel = new categoriaModel();
        return $categoriaModel->delete($id);
    }
    
    function readById($id){
        $categoriaModel =  new categoriaModel();
        return $categoriaModel->readById($id);
    }
    
}
?>
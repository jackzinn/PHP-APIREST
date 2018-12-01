<?php

include '../../model/userModel.php';

class userController{
    
    function read(){
      $userModel = new userModel();
      return $userModel->read();
    }
    
    function create($obj){
      $userModel = new userModel();
      return $userModel->create($obj);
		  header('Location:read.php');
    }
    
    function update($obj, $id){
      $userModel = new userModel();
      return $userModel->update($obj, $id);
    }
    
    function delete($id){
      $userModel = new userModel();
      return $userModel->delete($id);
    }
    
    function readById($id){
      $userModel =  new userModel();
      return $userModel->readById($id);
	  }
    
}

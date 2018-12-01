<?php

include '../../control/categoriaController.php';

$data = file_get_contents('php://input');

$obj =  json_decode($data);

$id = $_GET['id'];

if  (!empty ($data) ){	

    $categoriaController = new categoriaController();
    
    $categoriaController->update($obj, $id);

    header('Location:read.php');
}


?>